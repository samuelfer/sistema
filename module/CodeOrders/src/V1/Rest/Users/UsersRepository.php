<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 27/01/17
 * Time: 21:59
 */

namespace CodeOrders\V1\Rest\Users;


use Zend\Db\TableGateway\TableGateway;
use Zend\Paginator\Adapter\DbTableGateway;
use ZF\MvcAuth\Identity\AuthenticatedIdentity;

class UsersRepository
{

    
    private $tableGateway;
    
    /**
     * @var AuthenticatedIdentity
     */
    private $auth;
     
    public function __construct(TableGateway $tableGateway, AuthenticatedIdentity $auth)
    {
        $this->tableGateway = $tableGateway;
        $this->auth = $auth;
    }

    //Busca todos os usuarios
    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        //return $this->tableGateway->select();
        return new UsersCollection($paginatorAdapter);
    }

    //Busca usuario por id
    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (int)$id]);
        return $resultSet->current();
    }

    //Busca usuario pelo username
    //Usado para saber se o usuario tem permissao para algo
    public function findByUsername($username)
    {
        return $this->tableGateway->select(['username' => $username])->current();
    }
    
     public function getAuthenticated()
    {
        $username =$this->auth->getAuthenticationIdentity()['user_id'];
        return $this->findByUsername($username);
    }
}