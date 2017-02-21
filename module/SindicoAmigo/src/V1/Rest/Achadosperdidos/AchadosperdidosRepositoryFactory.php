<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:27
 */

namespace SindicoAmigo\V1\Rest\Achadosperdidos;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class AchadosperdidosRepositoryFactory
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
        $hydrator = new HydratingResultSet(new ClassMethods(), new AchadosperdidosEntity());

        $tableGateway = new TableGateway('achados_perdidos', $dbAdapter, null, $hydrator);

        $achadosperdidosRepository = new AchadosperdidosRepository($tableGateway);

        return $achadosperdidosRepository;
    }
}