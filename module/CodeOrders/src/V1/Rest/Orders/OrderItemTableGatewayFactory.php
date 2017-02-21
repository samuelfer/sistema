<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 30/01/17
 * Time: 22:22
 */

namespace CodeOrders\V1\Rest\Orders;


use Interop\Container\ContainerInterface;
//use Interop\Container\Exception\ContainerException;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
//use Zend\ServiceManager\Exception\ServiceNotCreatedException;
//use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class OrderItemTableGatewayFactory
{


    /**
     * Create an object
     *
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapterCode');

        $hydrator = new HydratingResultSet(new ClassMethods(), new OrderItemEntity());

        $tableGateway = new TableGateway('order_items', $dbAdapter, null, $hydrator);

        return $tableGateway;

    }
}