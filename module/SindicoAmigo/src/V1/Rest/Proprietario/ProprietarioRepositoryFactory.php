<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 14:44
 */

namespace SindicoAmigo\V1\Rest\Proprietario;

use Interop\Container\ContainerInterface;
//use SindicoAmigo\V1\Rest\Condominio\CondominioEntity;
//use SindicoAmigo\V1\Rest\Condominio\CondominioRepository;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class ProprietarioRepositoryFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new ProprietarioEntity());

        $tableGateway = new TableGateway('proprietario', $dbAdapter, null, $hydrator);

        $proprietarioRepository = new ProprietarioRepository($tableGateway);

        return $proprietarioRepository;
    }
}