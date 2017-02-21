<?php

/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 14:28
 */

namespace SindicoAmigo\V1\Rest\Reserva;

//use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Paginator\Adapter\DbTableGateway;
use Zend\Hydrator\ObjectProperty;

class ReservaRepository {

    /**
     * @var AbstractTableGateway
     */
    private $areacomumTableGateway;
    private $tableGateway;
    private $inadimplenciaTableGateway;
    private $bloqueioPeriodoTableGateway;

    public function __construct(AbstractTableGateway $tableGateway, AbstractTableGateway $inadimplenciaTableGateway, AbstractTableGateway $areacomumTableGateway, AbstractTableGateway $bloqueioPeriodoTableGateway) {

        $this->tableGateway = $tableGateway;
        //$this->userInadimplenteTableGateway = $userInadimplenteTableGateway;
        $this->inadimplenciaTableGateway = $inadimplenciaTableGateway;
        $this->areacomumTableGateway = $areacomumTableGateway;
        $this->bloqueioPeriodoTableGateway = $bloqueioPeriodoTableGateway;
    }

    //VERIFICANDO SE O USUARIO ESTA INADIMPLENTE
    public function userInadimplencia($login) {
        $user = $this->inadimplenciaTableGateway
                ->select(['usuario' => $login])
                ->current();

        return $user->getStInadimplente();
    }

    //FUNCAO QUE VERIFICA SE O IMOVEL ESTA NA TABELA DE BLLOQUEIO_PERIODO
    function checkImmobileBlock($id_numero_imovel, $id_bloco, $dt_data) {
        $sqlCheckBlock = $this
                ->bloqueioPeriodoTableGateway
                ->getAdapter()
                ->getDriver()
                ->getConnection()
                ->execute("SELECT id_bloco, id_numero_imovel FROM bloqueio_periodo 
                                   WHERE id_bloco = $id_bloco AND id_numero_imovel = $id_numero_imovel
                                   AND dt_fim <= '$dt_data'")
                ->current();

        //$resultValue = $this->getResultOnly($sqlCheckBlock);
        if (!empty($sqlCheckBlock)) {
            return false;
        } else {
            return true;
        }
    }

    //VERIFICAR SE E POSSIVEL FAZER MAIS DE UMA RESERVA NO MESMO DIA
    public function allowsMoreBookingOneDay($id_cadastro_reserva_area_comum, $id_numero_imovel, $id_bloco, $dt_data, $id_area_pai) {

        $resAllowsVariousBooking = $this->areacomumTableGateway
                ->select(['id_cadastro_reserva_area_comum' => (int) $id_cadastro_reserva_area_comum])
                ->current();

        $allowsVariousBooking = $resAllowsVariousBooking->getPermVariasReservaDia();

        if ($allowsVariousBooking != "S") {
            //PEGANDO A QUANTIDADE DE RESERVA DA AREA FOI FEITA PELO IMOVEL
            $sqlVerifyBookingInDate = $this->tableGateway->select(['id_cadastro_reserva_area_comum' => (int) $id_cadastro_reserva_area_comum,
                'id_numero_imovel' => (int) $id_numero_imovel,
                'id_bloco' => (int) $id_bloco,
                'dt_data' => (string) $dt_data,
                'id_area_pai' => (int) $id_area_pai]);

            //Quantidades de reservas feita pelo imovel
            $countBooking = $sqlVerifyBookingInDate->count();
            //echo "Quantidade de reserva ".$countBooking;die;
            return $countBooking == 0 ? false : true;
        } else {
            return false;
        }
    }

    //VERIFICAR QUANTAS VEZES O IMOVEL FEZ A RESERVA DA MESMA AREA COMUM NO MES
    function sameBookingOneMonth($id_cadastro_reserva_area_comum, $dt_data, $id_numero_imovel, $id_bloco, $id_area_pai) {

        $sqlCheck = $this->areacomumTableGateway
                         ->select(['id_cadastro_reserva_area_comum' => (int) $id_cadastro_reserva_area_comum])
                         ->current();
        //SE ESSE CAMPO FOR IGUAL A N TENHO QUE CONTAR A QUANTIDADE DE RESERVA FEITA PELO IMOVEL
        $resultSqlCheckIgnoreBookink = $sqlCheck->getIgnoraQtdReserva(); //Ignora quantidade de reserva?
        $resultSqlCheckCountBookink = $sqlCheck->getQtdReservaMes(); //Quantidade de reserva permitida por mes
        //print_r($resultSqlCheckCountBookink);die;
        if (!empty($resultSqlCheckIgnoreBookink) and isset($resultSqlCheckIgnoreBookink) and $resultSqlCheckIgnoreBookink == "N") {

            $mes_reserva = date('m', strtotime($dt_data));
            $ano_reserva = date('Y', strtotime($dt_data));

            //PEGANDO A QUANTIDADE DE RESERVA FEITA PELO IMOVEL NO MES E ANO ESCOLHIDO A RESERVAR
            $sqlSameBookingOneMonth = $this
                    ->tableGateway
                    ->getAdapter()
                    ->getDriver()
                    ->getConnection()
                    ->execute("SELECT count(idevento) FROM reserva_area_comum
                               WHERE id_area_pai = $id_area_pai AND (id_bloco = $id_bloco AND id_numero_imovel = $id_numero_imovel) AND
                               (MONTH(dt_data) = '$mes_reserva' AND YEAR(dt_data) = '$ano_reserva')");

            //print_r($sqlSameBookingOneMonth);die;
            return $sqlSameBookingOneMonth >= $resultSqlCheckCountBookink ? true : false;
        }
    }

    //VERIFICANDO SE O USUARIO ESTA TENTANDO RESERVAR  A AREA COMUM ANTES DA ANTECEDENCIA MAXIMA PERMITIDA  
    function checkDayMaximumAdvanced($id_cadastro_reserva_area_comum, $dt_data) {
        $resQtdyDayAntecipation = $this
                ->areacomumTableGateway
                ->getAdapter()
                ->getDriver()
                ->getConnection()
                ->execut("SELECT nu_antecedencia_max FROM cadastro_area_comum
                          WHERE id_cadastro_reserva_area_comum = $id_cadastro_reserva_area_comum");
        //$resultQtdyDayAntecipation = $sqlQtdyDayAntecipation->getNuAntecedenciaMax(); //QUANTIDADE DE DIAS DE ANTECEDENCIA MAXIMA DE RESERVA DA AREA

        $current_date = (new \DateTime())->format('Y-m-d');
        //print_r($current_date);die;
        $startTimeStamp = strtotime($dt_data);
        $endTimeStamp = strtotime($current_date);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        // 86400 seconds in one day
        $numberDays = $timeDiff / 86400;
        //print_r($resultQtdyDayAntecipation);die;

        if ($numberDays > $resQtdyDayAntecipation) {
            return true;
        } else {
            return false;
        }
    }

    //VERIFICANDO SE O USUARIO ESTA TENTANDO RESERVAR  A AREA COMUM ANTES DA ANTECEDENCIA MINIMA PERMITIDA  
    /* function checkDayMinimumAdvanced($id_cadastro_reserva_area_comum, $dt_data) {
      $sqlQtdyDayMinimum = $this
      ->areacomumTableGateway
      ->select(['id_cadastro_reserva_area_comum' => (int) $id_cadastro_reserva_area_comum])
      ->current();
      $resultQtdyDayAntecipation = $sqlQtdyDayMinimum->getNuAntecedenciaMin(); //QUANTIDADE DE DIAS DE ANTECEDENCIA MINIMA DE RESERVA DA AREA

      //print_r($resultQtdyDayAntecipation);die;
      $current_date = (new \DateTime())->format('Y-m-d');
      //print_r($current_date);die;
      $startTimeStamp = strtotime($dt_data);
      $endTimeStamp = strtotime($current_date);
      $timeDiff = abs($endTimeStamp - $startTimeStamp);
      // 86400 seconds in one day
      $numberDays = $timeDiff / 86400;

      if ($numberDays > $resultQtdyDayAntecipation) {
      return true;
      } else {
      return false;
      }
      } */

    //VERIFICANDO A HORA DE INICIO E FIM DA AREA COMUM, PRA SABER SE OS HORARIOS ESCOLHIDOS SAO PERMITIDOS
    function checkTimeForArea($id_cadastro_reserva_area_comum, $hourStart, $hourEnd) {
        $horaInicio = date('H:i:s', strtotime($hourStart));
        $horaFim = date('H:i:s', strtotime($hourEnd));
        $duracao = abs(strtotime($hourEnd) - (strtotime($hourStart))) / 3600;

        $sqlValue = $this
                ->areacomumTableGateway
                ->select(['id_cadastro_reserva_area_comum' => (int) $id_cadastro_reserva_area_comum])
                ->current();

        $resultValueStHour = $sqlValue->getStHorarioSn(); //Pode mudar o horario?
        $resultValueHourStart = $sqlValue->getHrInicio(); //Hora de inicio
        $resultValueHourEnd = $sqlValue->getHrFim(); //Hora do fim
        $resultValueDuration = $sqlValue->getTmpDuracao(); //Tempo de duracao
        //VERIFICANDO SE PODE MUDAR O HORARIO, SE NAO FOR FOR POSSIVEL E SETADO O VALOR DO BANCO
        if ($resultValueStHour == 'N') {
           $horaInicio = $resultValueHourStart;
            $horaFim = $resultValueHourEnd;
        }
        //print_r($horaFim);die;
        $GLOBALS['validateTimeForArea'] = "";

        if ($horaInicio < $resultValueHourStart) {
            $GLOBALS['validateTimeForArea'] = "Desculpe, a área só pode ser reservada a partir das " . substr($resultValueHourStart, 0, -3) . " horas.";
        } else if ($horaFim > $resultValueHourEnd) {
            $GLOBALS['validateTimeForArea'] = "Desculpe, a área só pode ser reservada até as " . substr($resultValueHourEnd, 0, -3) . " horas.";
        } else if ($duracao > $resultValueDuration) {
            $GLOBALS['validateTimeForArea'] = "Desculpe, a área só pode ser reserva durante " . $resultValueDuration . " horas.";
        }


        if (empty($GLOBALS['validateTimeForArea'])) {
            return false;
        } else {
            return true;
        }
    }

    //VERIFICANDO SE A AREA ESCOLHIDA PRA RESERVAR ESTA DISPONIVEL
    function checkDateSameDay($id_cadastro_reserva_area_comum, $dt_data, $hourStart, $hourEnd) {
        $uHourStart = date('H:i', strtotime($hourStart));
        $uHourEnd = date('H:i', strtotime($hourEnd));
        $sqlCheckDay = $this
                ->tableGateway
                ->getAdapter()
                ->getDriver()
                ->getConnection()
                ->execute("SELECT r.dt_data
    			   FROM reserva_area_comum r
    			   WHERE (r.id_cadastro_reserva_area_comum = $id_cadastro_reserva_area_comum AND
    			   r.dt_data = '$dt_data' AND
    			   (r.dt_hora_inicio <= '$uHourStart' AND r.dt_hora_fim >= '$uHourStart' OR
    		           r.dt_hora_inicio <= '$uHourEnd' AND r.dt_hora_fim >= '$uHourEnd' OR
    			   r.dt_hora_inicio >= '$uHourStart' AND r.dt_hora_fim <= '$uHourEnd' OR
    			   r.dt_hora_inicio <= '$uHourStart' AND r.dt_hora_fim >= '$uHourEnd')) AND
    			   (r.status = 'confirmado' OR r.status = 'pendente' OR r.status = 'bloqueado')");


        //print_r($sqlCheckDay);die;
        if (!empty($sqlCheckDay)) {
            return false;
        } else {
            return true;
        }
    }

    //RETORNA UM REGISTRO PELO ID
    public function find($idevento) {
        $resultSet = $this->tableGateway->select(['idevento' => (int) $idevento]);
        return $resultSet->current();
    }

    //RETORNA UMA COLECAO DE REGISTROS
    public function findAll() {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new ReservaCollection($paginatorAdapter);
    }
    
    //INSERINDO REGISTROS
    public function create($data) {
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            
            
            //INSERIR AQUI REGRA DE VALOR DA RESERVA
            
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idReserva = $this->tableGateway->getLastInsertValue();
            return $idReserva;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }
    }

    public function update($id, $data) {
        //$this->tableGateway->update((array)$data, ["id_cadastro_reserva_area_comum"=>(int)$id]);
        //$id = $this->tableGateway->lastInsertValue;
        //return $this->find($id);

        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->update((array) $data, ["idevento" => (int) $id]);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            //$id = $this->tableGateway->getLastInsertValue();
            //print_r(tableGateway);die;
            return $id;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }
    }

    public function delete($id) {
        $result = $this->find($id);
        //print_r($result);die;
        if (!$result) {
            return new ApiProblem(404, 'Registro não encontrado');
        }
        $this->tableGateway->delete(['idevento' => (int) $id]);
        return true;
    }

}
