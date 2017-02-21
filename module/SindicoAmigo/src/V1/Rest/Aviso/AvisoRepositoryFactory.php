<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 16:45
 */

namespace SindicoAmigo\V1\Rest\Aviso;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class AvisoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new AvisoEntity());

        $tableGateway = new TableGateway('aviso', $dbAdapter, null, $hydrator);

        $avisoRepository = new AvisoRepository($tableGateway);

        return $avisoRepository;

    }

}