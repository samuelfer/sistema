<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 15:42
 */

namespace SindicoAmigo\V1\Rest\Segusers;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class SegusersRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new SegusersEntity());
        $tableGateway = new TableGateway('seg_users', $dbAdapter, null, $hydrator);
        $usersRepository = new SegusersRepository($tableGateway);
        return $usersRepository;
    }

}