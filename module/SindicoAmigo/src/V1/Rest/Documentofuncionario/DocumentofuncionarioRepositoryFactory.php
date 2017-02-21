<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 14:09
 */

namespace SindicoAmigo\V1\Rest\Documentofuncionario;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class DocumentofuncionarioRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new DocumentofuncionarioEntity());

        $tableGateway = new TableGateway('documento_func', $dbAdapter, null, $hydrator);

        $documentofuncionarioRepository = new DocumentofuncionarioRepository($tableGateway);

        return $documentofuncionarioRepository;
    }

}