<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 17:01
 */

namespace SindicoAmigo\V1\Rest\Historico;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class HistoricoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new HistoricoEntity());
        $tableGateway = new TableGateway('historico', $dbAdapter, null, $hydrator);
        $historicoRepository = new HistoricoRepository($tableGateway);

        return $historicoRepository;
    }

}