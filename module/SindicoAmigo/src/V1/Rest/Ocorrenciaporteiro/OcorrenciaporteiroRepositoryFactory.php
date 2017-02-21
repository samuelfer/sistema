<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 15:41
 */

namespace SindicoAmigo\V1\Rest\Ocorrenciaporteiro;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class OcorrenciaporteiroRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new OcorrenciaporteiroEntity());
        $tableGateway = new TableGateway('ocorrencia_porteiro', $dbAdapter, null, $hydrator);
        $ocorrenciaporteiroRepository = new OcorrenciaporteiroRepository($tableGateway);

        return $ocorrenciaporteiroRepository;
    }

}