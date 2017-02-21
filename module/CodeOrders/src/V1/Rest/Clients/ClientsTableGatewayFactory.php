<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 04/02/17
 * Time: 19:13
 */

namespace CodeOrders\V1\Rest\Clients;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class ClientsTableGatewayFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapterCode');
        $hydrator = new HydratingResultSet(new ClassMethods(), new ClientsEntity());

        //Aqui insiro o nome do servico que registrei no module config
        $tableGateway = new TableGateway('clients', $dbAdapter, null, $hydrator);

        
        return $tableGateway;

    }
}