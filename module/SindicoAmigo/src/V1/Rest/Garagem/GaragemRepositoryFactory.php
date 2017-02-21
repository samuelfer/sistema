<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 16:39
 */

namespace SindicoAmigo\V1\Rest\Garagem;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class GaragemRepositoryFactory
{
    /**
     * @param ContainerInterface $container
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new GaragemEntity());
        $tableGateway = new TableGateway('garagem', $dbAdapter, null, $hydrator);
        $garagemRepository = new GaragemRepository($tableGateway);

        return $garagemRepository;

    }

}