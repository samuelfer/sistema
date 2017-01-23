<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:27
 */

namespace sindicoamigo\V1\Rest\AreaComum;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;


class AreacomumRepositoryFactory implements FactoryInterface
{


    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return AreacomumRepository
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $dbAdapter = $serviceLocator->get('DbAdapter');
        $areacomumMapper = new AreacomumMapper();
        $hydrator = new HydratingResultSet($areacomumMapper, new AreaComumEntity());

        $tableGateway = new TableGateway('area_comum', $dbAdapter, null, $hydrator);

        $areacomumRepository = new AreacomumRepository($tableGateway);

        return $areacomumRepository;
    }
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     *
     * public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
     * {
     * $dbAdapter = $container->get('DbAdapter');
     * $areacomumMapper = new AreacomumMapper();
     * $hydrator = new HydratingResultSet($areacomumMapper, new AreaComumEntity());
     *
     * $tableGateway = new TableGateway('area_comum', $dbAdapter, null, $hydrator);
     *
     * $areacomumRepository = new areacomumRepository($tableGateway);
     *
     * return $areacomumRepository;
     * } */
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     *     creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // TODO: Implement __invoke() method.
    }
}