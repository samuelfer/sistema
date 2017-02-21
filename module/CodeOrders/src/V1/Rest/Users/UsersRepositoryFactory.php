<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 27/01/17
 * Time: 22:03
 */

namespace CodeOrders\V1\Rest\Users;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class UsersRepositoryFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapterCode');
        //$usersMapper = new UsersMapper();
        //$hydrator = new HydratingResultSet($usersMapper, new UsersEntity());
        //PODE SER ASSIM TAMBEM
        $hydrator = new HydratingResultSet(new ClassMethods(), new UsersEntity());
        $tableGateway = new TableGateway('oauth_users', $dbAdapter, null, $hydrator);
        $auth = $container->get('api-identity');
        $usersRepository = new UsersRepository($tableGateway, $auth);
        
        return $usersRepository;
    }
}