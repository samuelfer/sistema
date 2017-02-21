<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 13:20
 */

namespace SindicoAmigo\V1\Rest\Pessoa;


use Interop\Container\ContainerInterface;
//use SindicoAmigo\V1\Rest\Condominio\CondominioEntity;
//use SindicoAmigo\V1\Rest\Condominio\CondominioRepository;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class PessoaRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new PessoaEntity());

        $tableGateway = new TableGateway('condominio', $dbAdapter, null, $hydrator);

        $pessoaRepository = new PessoaRepository($tableGateway);

        return $pessoaRepository;
    }

}