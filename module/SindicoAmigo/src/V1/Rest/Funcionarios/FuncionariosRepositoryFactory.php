<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 15:12
 */

namespace SindicoAmigo\V1\Rest\Funcionarios;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class FuncionariosRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        //Pegando a conexao com a base de dados
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new FuncionariosEntity());
        $tableGateway = new TableGateway('funcionarios', $dbAdapter, null, $hydrator);
        $funcionariosRepository = new FuncionariosRepository($tableGateway);
        return $funcionariosRepository;

    }

}