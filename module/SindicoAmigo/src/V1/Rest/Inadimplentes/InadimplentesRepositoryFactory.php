<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 16:15
 */

namespace SindicoAmigo\V1\Rest\Inadimplentes;

//use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
//use Zend\Db\TableGateway\TableGateway;
//use Zend\Hydrator\ClassMethods;

class InadimplentesRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        //$dbAdapter = $container->get('DbAdapter');
        //$hydrator = new HydratingResultSet(new ClassMethods(), new InadimplentesEntity());
        //$tableGateway = new TableGateway('inadimplentes', $dbAdapter, null, $hydrator);
        $tableGateway = $container->get(\SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesTableGateway::class);
        
        //$tableGateway = $container->get(\SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesRepository::class);
        
        $inadimplentesRepository = new InadimplentesRepository($tableGateway);

        return $inadimplentesRepository;
    }

}