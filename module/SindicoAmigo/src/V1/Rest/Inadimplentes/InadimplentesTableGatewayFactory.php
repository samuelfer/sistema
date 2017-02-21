<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 04/02/17
 * Time: 19:13
 */

namespace SindicoAmigo\V1\Rest\Inadimplentes;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class InadimplentesTableGatewayFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new InadimplentesEntity());

        //Aqui insiro o nome do servico que registrei no module config
        $tableGateway = new TableGateway('inadimplentes', $dbAdapter, null, $hydrator);

        
        return $tableGateway;

    }
}