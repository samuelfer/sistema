<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 30/01/17
 * Time: 22:41
 */

namespace CodeOrders\V1\Rest\Orders;


use Interop\Container\ContainerInterface;
//use Interop\Container\Exception\ContainerException;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class OrdersRepositoryFactory
{

    /**
     * Create an object
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapterCode');
        $hydrator = new HydratingResultSet(new ClassMethods(), new OrdersEntity());

        //Aqui insiro o nome do servico que registrei no module config
        $tableGateway = new TableGateway('orders', $dbAdapter, null, $hydrator);

        $orderItemTableGateway = $container->get(\CodeOrders\V1\Rest\Orders\OrderItemTableGateway::class);

        $clientTableGateway = $container->get(\CodeOrders\V1\Rest\Clients\ClientsTableGateway::class);

        return new OrdersRepository($tableGateway, $orderItemTableGateway, $clientTableGateway);
    }
}