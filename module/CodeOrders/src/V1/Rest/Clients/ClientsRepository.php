<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 04/02/17
 * Time: 19:11
 */

namespace CodeOrders\V1\Rest\Clients;


use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Paginator\Adapter\DbTableGateway;

class ClientsRepository
{
    /**
     * @var AbstractTableGateway*
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll()
    {
        //$tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($this->tableGateway);
        return new ClientsCollection($paginatorAdapter);
    }

}