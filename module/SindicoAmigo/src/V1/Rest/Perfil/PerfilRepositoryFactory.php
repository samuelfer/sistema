<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 13:48
 */

namespace SindicoAmigo\V1\Rest\Perfil;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class PerfilRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        //Pegando o adaptador de banco de dados
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new PerfilEntity());
        //Pegando a tabela
        $tableGateway = new TableGateway('perfil', $dbAdapter, null, $hydrator);
        $perfilRepository = new PerfilRepository($tableGateway);
        return $perfilRepository;
    }

}