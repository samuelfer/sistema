<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 14:09
 */

namespace SindicoAmigo\V1\Rest\Consumogas;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class ConsumogasRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new ConsumogasEntity());

        $tableGateway = new TableGateway('consumo_gas', $dbAdapter, null, $hydrator);

        $consumogasRepository = new ConsumogasRepository($tableGateway);

        return $consumogasRepository;
    }

}