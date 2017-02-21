<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 07/02/17
 * Time: 22:31
 */

namespace CodeOrders\V1\Rest\Products;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Paginator\Adapter\DbTableGateway;


class ProductsRepository
{
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
     public function  findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);
        // return$this->tableGateway->select();
        return new ProductsCollection($paginatorAdapter);
    }

    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (int)$id]);
        if ($resultSet->count() == 1){
            return $resultSet->current();
        }
        return false;
    }

}