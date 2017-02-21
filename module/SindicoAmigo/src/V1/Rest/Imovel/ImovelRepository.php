<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 17:10
 */

namespace SindicoAmigo\V1\Rest\Imovel;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class ImovelRepository
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function find($id_numero_imovel)
    {
        $resultSet = $this->tableGateway->select(['id_numero_imovel' => (int)$id_numero_imovel]);
        return $resultSet->current();
    }

    public function findAll()
    {
        //Implementado o paginator
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new ImovelCollection($paginatorAdapter);
        //return $this->tableGateway->select();
    }
    
    //Inserindo o registro
    public function create($data)
    {
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idImovel = $this->tableGateway->getLastInsertValue();
            return $idImovel;
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
            $this->tableGateway->update((array)$data, ["id_numero_imovel"=>(int)$id]);
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
        $this->tableGateway->delete(['id_numero_imovel'=>(int)$id]);
        return true;
    }

}