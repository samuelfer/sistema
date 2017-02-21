<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 14:09
 */

namespace SindicoAmigo\V1\Rest\Contacorrente;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class ContacorrenteRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new ContacorrenteEntity());

        $tableGateway = new TableGateway('conta_corrente', $dbAdapter, null, $hydrator);

        $contacorrenteRepository = new ContacorrenteRepository($tableGateway);

        return $contacorrenteRepository;
    }

}