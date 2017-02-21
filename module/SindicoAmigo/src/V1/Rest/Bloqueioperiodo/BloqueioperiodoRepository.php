<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:20
 */

namespace SindicoAmigo\V1\Rest\Bloqueioperiodo;

use ZF\ApiProblem\ApiProblem;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class BloqueioperiodoRepository
{

    private $tableGateway;

    /**
     * @var TableGatewayInterface
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
        
    }

    //Retornando a areacomum pelo id
    public function find($id_bloqueio_periodo)
    {
        $resultSet = $this->tableGateway->select(['id_bloqueio_periodo' => (int)$id_bloqueio_periodo]);
        return $resultSet->current();
    }
    
     //Retornando todos os registros
    public function findAll()
    {
        //Implementado o paginator
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new BloqueioperiodoCollection($paginatorAdapter);
        //return $this->tableGateway->select();
        
    }

    
    //Inserindo o registro
    public function create($data)
    {
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idArea = $this->tableGateway->getLastInsertValue();
            return $idArea;
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
            $this->tableGateway->update((array)$data, ["id_bloqueio_periodo"=>(int)$id]);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            //$id = $this->tableGateway->getLastInsertValue();
           //print_r(tableGateway);die;
            return $id;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }
    }
    
     public function patch($data, $id)
    {
        $this->tableGateway->update($data, ['id_bloqueio_periodo' => $id]);
        return $id;
    }
    
     public function delete($id)
    {
        $result = $this->find($id);
        //print_r($result);die;
        if(!$result)
        {
            return new ApiProblem(404,'Registro não encontrado');
        }
        $this->tableGateway->delete(['id_bloqueio_periodo'=>(int)$id]);
        return true;
    }
}