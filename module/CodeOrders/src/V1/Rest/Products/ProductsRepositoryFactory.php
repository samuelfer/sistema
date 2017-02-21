<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 07/02/17
 * Time: 22:36
 */

namespace CodeOrders\V1\Rest\Products;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ArraySerializable;

class ProductsRepositoryFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapterCode');
        $hydrator = new HydratingResultSet(new ArraySerializable(), new ProductsEntity());

        $tableGateway = new TableGateway('products', $dbAdapter, null, $hydrator);

        return new ProductsRepository($tableGateway);
    }

}