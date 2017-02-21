<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 16:15
 */

namespace SindicoAmigo\V1\Rest\Modeloveiculo;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class ModeloveiculoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new ModeloveiculoEntity());
        $tableGateway = new TableGateway('modelo_veiculo', $dbAdapter, null, $hydrator);
        $modeloveiculoRepository = new ModeloveiculoRepository($tableGateway);

        return $modeloveiculoRepository;
    }

}