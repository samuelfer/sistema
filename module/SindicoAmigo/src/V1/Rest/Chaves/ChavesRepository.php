<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:20
 */

namespace SindicoAmigo\V1\Rest\Chaves;


use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class ChavesRepository
{

    private $tableGateway;

    /**
     * @var TableGatewayInterface
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    //Retornando uma colecao de registros
    public function findAll()
    {
        //Implementado o paginator
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new ChavesCollection($paginatorAdapter);
        //return $this->tableGateway->select();
    }

    //Retornando o registro pelo id
    public function find($id_chaves)
    {
        $resultSet = $this->tableGateway->select(['id_chaves' => (int)$id_chaves]);
        return $resultSet->current();
    }
    
    //Inserindo o registro
    public function create($data)
    {
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idChaves = $this->tableGateway->getLastInsertValue();
            return $idChaves;
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
            $this->tableGateway->update((array)$data, ["id_chaves"=>(int)$id]);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            //$id = $this->tableGateway->getLastInsertValue();
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
        $this->tableGateway->delete(['id_chaves'=>(int)$id]);
        return true;
    }

}