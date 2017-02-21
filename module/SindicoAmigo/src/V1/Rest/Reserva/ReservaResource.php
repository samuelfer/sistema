<?php

namespace SindicoAmigo\V1\Rest\Reserva;

use Zend\Hydrator\ObjectProperty;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class ReservaResource extends AbstractResourceListener {

    private $repository;

    public function __construct(ReservaRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data) {
        //Verificando se o usuário está inadimplente
        $userInadimplente = $this->repository->userInadimplencia($data->login);
        if ($userInadimplente != "N") {
            return new ApiProblem(403, 'Desculpe, houve um problema para realizar a reserva. Entre em contato com o administrador.');
        }

        //FUNCAO QUE VERIFICA SE O IMOVEL ESTA NA TABELA DE BLLOQUEIO_PERIODO
        $resCheckImmobileBlock = $this->repository->checkImmobileBlock($data->id_numero_imovel, $data->id_bloco, $data->dt_data);
        if ($resCheckImmobileBlock) {
            return new ApiProblem(403, 'Não foi possível reservar nesse momento! Entre em contato com o administrador do condomínio.');
        }

        //VERIFICANDO SE E PERMITIDO VARIAS RESERVAS PARA A AREA ESCOLHIDA
        $allowsVariousReserve = $this->repository->allowsMoreBookingOneDay($data->id_cadastro_reserva_area_comum, $data->id_numero_imovel, $data->id_bloco, $data->dt_data, $data->id_area_pai);
        if ($allowsVariousReserve) {
            return new ApiProblem(403, 'Desculpe, você não pode fazer essa reserva, pois já fez outra para este dia. Escolha outra data por favor.');
        }

        //VERIFICAR QUANTAS VEZES O IMOVEL FEZ RESERVA DA MESMA AREA COMUM NO MES
        $resSqlCheckIgnoreBookink = $this->repository->sameBookingOneMonth
                ($data->id_cadastro_reserva_area_comum, $data->dt_data, $data->id_numero_imovel, $data->id_bloco, $data->id_area_pai);
        if ($resSqlCheckIgnoreBookink) {
            return new ApiProblem(403, 'Desculpe, você já atingiu a quota de reservas do mês para esta área!');
        }

        //VERIFICANDO A ANTECEDENCIA MAXIMA PERMITIDA
        $checkDayAntecipation = $this->repository->checkDayMaximumAdvanced($data->id_cadastro_reserva_area_comum, $data->dt_data);
        if ($checkDayAntecipation) {
            return new ApiProblem(403, 'Você não pode reservar com tantos dias de antecedência!');
        }

        //VERIFICANDO A ANTECEDENCIA MINIMA PERMITIDA
        $checkDayMinimum = $this->repository->checkDayMinimumAdvanced($data->id_cadastro_reserva_area_comum, $data->dt_data);
        if ($checkDayMinimum) {
            return new ApiProblem(403, 'A antecedência mínima não permitida!');
        }

        //VERIFICANDO A HORA DE INICIO PERMITIDA PARA RESERVAR A AREA COMUM
        $checkHour = $this->repository->checkTimeForArea($data->id_cadastro_reserva_area_comum, $data->dt_hora_inicio, $data->dt_hora_fim);
        if ($checkHour) {
            return new ApiProblem(403, 'Hora de início não permitida!' . $GLOBALS['validateTimeForArea']);
        }

        //VERIFICANDO SE A AREA ESCOLHIDA PRA RESERVAR ESTA DISPONIVEL
        $checkBookink = $this->repository->checkDateSameDay($data->id_cadastro_reserva_area_comum, $data->dt_data, $data->dt_hora_inicio, $data->dt_hora_fim);
        if (!$checkBookink) {
            return new ApiProblem(403, 'Neste horário a área está reservada. Por favor, escolha outro horário!');
        }


        $hydrator = new ObjectProperty();
        $dataReserva = $hydrator->extract($data);
        $result = $this->repository->create($dataReserva);
        //print_r($result);die;
        //SE DER ALGUM ERRO RETORNA A MENSAGEM
        if ($result == "error") {
            return new ApiProblem(500, 'Error ao tentar cadastrar!');
        }
        return $result;
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id) {
        //$userRole = $this->repository->findByUsername($this->getIdentity()->getRoleId());
        //if($userRole!="admin")
        //{
        // return new ApiProblem(403, 'You are not an admin. Your are an :'.$userRole);
        //}
        //print_r($id);die;
        return $this->repository->delete($id);
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data) {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    //Retorna um registro pelo id
    public function fetch($idevento) {
        return $this->repository->find($idevento);
    }
    
    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    //Retorna uma colecao de registros
    public function fetchAll($params = []) {
        return $this->repository->findAll();
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data) {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data) {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data) {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data) {
        $result = $this->repository->update($id, $data);

        if ($result == "error") {
            return new ApiProblem(500, 'Error');
        }
        return $result;
    }

}
