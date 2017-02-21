<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 15:35
 */

namespace SindicoAmigo\V1\Rest\Visitante;


use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class VisitanteRepository
{
    private $tableGateway;


    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    //Retorna todos os vistantes
    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new VisitanteCollection($paginatorAdapter);
    }
    
    public function find($id_visitante)
    {
        $resultSet = $this->tableGateway->select(['id_visitante' => (int)$id_visitante]);
        return $resultSet->current();
    }
    
    //Inserindo o registro
    public function create($data)
    {
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idVisitante = $this->tableGateway->getLastInsertValue();
            return $idVisitante;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }

    }
    
    public function update($id, $data)
    {
       //$this->tableGateway->update((array)$data, ["id_cadastro_reserva_area_comum"=>(int)$id]);
       //$id = $this->tableGateway->lastInsertValue;
       //return $this->find($id);
        
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->update((array)$data, ["id_visitante"=>(int)$id]);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            //$id = $this->tableGateway->getLastInsertValue();
           //print_r(tableGateway);die;
            return $id;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }
    }
      
     public function delete($id)
    {
        $result = $this->find($id);
        //print_r($result);die;
        if(!$result)
        {
            return new ApiProblem(404,'Registro não encontrado');
        }
        $this->tableGateway->delete(['id_visitante'=>(int)$id]);
        return true;
    }

}