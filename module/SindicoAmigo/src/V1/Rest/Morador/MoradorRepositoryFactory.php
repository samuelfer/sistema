<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 16:15
 */

namespace SindicoAmigo\V1\Rest\Morador;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class MoradorRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new MoradorEntity());
        $tableGateway = new TableGateway('morador', $dbAdapter, null, $hydrator);
        $moradorRepository = new MoradorRepository($tableGateway);

        return $moradorRepository;
    }

}