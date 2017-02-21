<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 13:20
 */

namespace SindicoAmigo\V1\Rest\Telefoneproprietario;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class TelefoneproprietarioRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new TelefoneproprietarioEntity());

        $tableGateway = new TableGateway('telefone_proprietario', $dbAdapter, null, $hydrator);

        $telefoneproprietarioRepository = new TelefoneproprietarioRepository($tableGateway);

        return $telefoneproprietarioRepository;
    }

}