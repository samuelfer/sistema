<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 14:52
 */

namespace SindicoAmigo\V1\Rest\Multa;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class MultaRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new MultaEntity());
        $tableGateway = new TableGateway('multa', $dbAdapter, null, $hydrator);
        $multaRepository = new MultaRepository($tableGateway);

        return $multaRepository;
    }

}