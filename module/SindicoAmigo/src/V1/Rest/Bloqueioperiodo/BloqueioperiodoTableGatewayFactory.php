<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 04/02/17
 * Time: 19:13
 */

namespace SindicoAmigo\V1\Rest\Bloqueioperiodo;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class BloqueioperiodoTableGatewayFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new BloqueioperiodoEntity());

        //Aqui insiro o nome do servico que registrei no module config
        $tableGateway = new TableGateway('bloqueio_periodo', $dbAdapter, null, $hydrator);

        
        return $tableGateway;

    }
}