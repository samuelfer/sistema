<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 14:52
 */

namespace SindicoAmigo\V1\Rest\Multaveiculo;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class MultaveiculoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new MultaveiculoEntity());
        $tableGateway = new TableGateway('multa_veiculo', $dbAdapter, null, $hydrator);
        $multaveiculoRepository = new MultaveiculoRepository($tableGateway);

        return $multaveiculoRepository;
    }

}