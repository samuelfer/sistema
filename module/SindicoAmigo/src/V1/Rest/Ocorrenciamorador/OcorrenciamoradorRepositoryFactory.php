<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 15:24
 */

namespace SindicoAmigo\V1\Rest\Ocorrenciamorador;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class OcorrenciamoradorRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new OcorrenciamoradorEntity());
        $tableGateway = new TableGateway('ocorrencia_morador', $dbAdapter, null, $hydrator);
        $ocorrenciamoradorRepository = new OcorrenciamoradorRepository($tableGateway);

        return $ocorrenciamoradorRepository;
    }

}