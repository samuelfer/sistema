<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 15:07
 */

namespace SindicoAmigo\V1\Rest\Funcionarios;


use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;


class FuncionariosRepository
{
    private $tableGateway;

    /**
     * FuncionariosRepository constructor.
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {

        $this->tableGateway = $tableGateway;
    }

    //Retorna todos os funcioarios
    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        return new FuncionariosCollection($paginatorAdapter);
        //return $this->tableGateway->select();
    }

    //Retornando a areacomum pelo id
    public function find($id_funcionarios){
        $resultSet = $this->tableGateway->select(['id_funcionarios' => (int)$id_funcionarios]);
        return $resultSet->current();

    }
    
    //Inserindo o registro
    public function create($data)
    {
        try {
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->beginTransaction();
            $this->tableGateway->insert($data);
            $this->tableGateway->getAdapter()->getDriver()->getConnection()->commit();
            $idFuncionario = $this->tableGateway->getLastInsertValue();
            return $idFuncionario;
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
            $this->tableGateway->update((array)$data, ["id_funcionarios"=>(int)$id]);
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
        $this->tableGateway->delete(['id_funcionarios'=>(int)$id]);
        return true;
    }

}