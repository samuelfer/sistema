<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 15:35
 */

namespace SindicoAmigo\V1\Rest\Segusers;


use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class SegusersRepository
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
        return new SegusersCollection($paginatorAdapter);
    }
    
    public function find($login)
    {
        $resultSet = $this->tableGateway->select(['login' => $login]);
        return $resultSet->current();
    }
    
    //Inserindo o registro
    public function create($data)
    {
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idUser = $this->tableGateway->getLastInsertValue();
            return $idUser;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }

    }
    
    public function update($login, $data)
    {
       //$this->tableGateway->update((array)$data, ["id_cadastro_reserva_area_comum"=>(int)$id]);
       //$id = $this->tableGateway->lastInsertValue;
       //return $this->find($id);
        
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->update((array)$data, ["login"=>$login]);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            //$id = $this->tableGateway->getLastInsertValue();
           //print_r(tableGateway);die;
            return $login;
        } catch (\Exception $e) {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->rollback();
            return 'error';
        }
    }
     
     public function delete($login)
    {
        $result = $this->find($login);
        //print_r($result);die;
        if(!$result)
        {
            return new ApiProblem(404,'Registro não encontrado');
        }
        $this->tableGateway->delete(['login'=>$login]);
        return true;
    }

}