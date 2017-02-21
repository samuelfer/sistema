<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 11:37
 */

namespace SindicoAmigo\V1\Rest\Condominio;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class CondominioRepositoryFactory
{
    /**
     * @param ContainerInterface $container
     * @return CondominioRepository
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new CondominioEntity());

        $tableGateway = new TableGateway('condominio', $dbAdapter, null, $hydrator);

        $condominioRepository = new CondominioRepository($tableGateway);

        return $condominioRepository;

    }

}