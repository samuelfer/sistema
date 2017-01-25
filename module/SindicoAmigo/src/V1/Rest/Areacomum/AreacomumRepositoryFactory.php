<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 08:27
 */

namespace SindicoAmigo\V1\Rest\Areacomum;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;

class AreacomumRepositoryFactory
{


    public function __invoke(ContainerInterface $container)
    {

        $dbAdapter = $container->get('DbAdapter');
        $areacomumMapper = new AreacomumMapper();
        $hydrator = new HydratingResultSet($areacomumMapper, new AreacomumEntity());
        $tableGateway = new TableGateway('area_comum', $dbAdapter, null, $hydrator);

        $areacomumRepository = new AreacomumRepository($tableGateway);

        return $areacomumRepository;
    }
}