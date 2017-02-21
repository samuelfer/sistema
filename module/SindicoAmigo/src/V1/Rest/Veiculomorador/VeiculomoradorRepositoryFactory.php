<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 15:42
 */

namespace SindicoAmigo\V1\Rest\Veiculomorador;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class VeiculomoradorRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new VeiculomoradorEntity());
        $tableGateway = new TableGateway('veiculo_morador', $dbAdapter, null, $hydrator);
        $veiculomoradorRepository = new VeiculomoradorRepository($tableGateway);
        return $veiculomoradorRepository;
    }

}