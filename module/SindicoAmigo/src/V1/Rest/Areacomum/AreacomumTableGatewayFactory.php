<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 04/02/17
 * Time: 19:13
 */

namespace SindicoAmigo\V1\Rest\Areacomum;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class AreacomumTableGatewayFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new AreacomumEntity());

        //Aqui insiro o nome do servico que registrei no module config
        $tableGateway = new TableGateway('area_comum', $dbAdapter, null, $hydrator);

        
        return $tableGateway;

    }
}