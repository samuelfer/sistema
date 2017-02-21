<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:27
 */

namespace SindicoAmigo\V1\Rest\Chaves;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class ChavesRepositoryFactory
{


    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return AreacomumRepository
     */
    //public function createService(ServiceLocatorInterface $serviceLocator)
    public function __invoke(ContainerInterface $container)
    {

        $dbAdapter = $container->get('DbAdapter');
        //$chavesMapper = new ChavesMapper();
        //$hydrator = new HydratingResultSet($chavesMapper, new ChavesEntity());
        //PODE SER ASSIM TAMBEM
        $hydrator = new HydratingResultSet(new ClassMethods(), new ChavesEntity());

        $tableGateway = new TableGateway('chaves', $dbAdapter, null, $hydrator);

        $chavesRepository = new ChavesRepository($tableGateway);

        return $chavesRepository;
    }
}