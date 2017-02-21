<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:27
 */

namespace SindicoAmigo\V1\Rest\Bloqueioperiodo;

use Interop\Container\ContainerInterface;
//use Zend\Db\ResultSet\HydratingResultSet;
//use Zend\Db\TableGateway\TableGateway;
//use Zend\Hydrator\ClassMethods;


class BloqueioperiodoRepositoryFactory
{
    /**
     * @return AreacomumRepository
     */
    //public function createService(ServiceLocatorInterface $serviceLocator)
    public function __invoke(ContainerInterface $container)
    {

        //$dbAdapter = $container->get('DbAdapter');
        //$areacomumMapper = new AreacomumMapper();
        //$hydrator = new HydratingResultSet($areacomumMapper, new AreacomumEntity());
        //PODE SER ASSIM TAMBEM
        //$hydrator = new HydratingResultSet(new ClassMethods(), new AreacomumEntity());

        //$tableGateway = new TableGateway('area_comum', $dbAdapter, null, $hydrator);
        
        $tableGateway = $container->get(\SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoTableGateway::class);

        $bloqueioRepository = new BloqueioperiodoRepository($tableGateway);

        return $bloqueioRepository;
    }
}