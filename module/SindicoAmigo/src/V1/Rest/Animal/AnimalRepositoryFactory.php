<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:27
 */

namespace SindicoAmigo\V1\Rest\Animal;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class AnimalRepositoryFactory
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
        $hydrator = new HydratingResultSet(new ClassMethods(), new AnimalEntity());

        $tableGateway = new TableGateway('animal', $dbAdapter, null, $hydrator);

        $animalRepository = new AnimalRepository($tableGateway);

        return $animalRepository;
    }
}