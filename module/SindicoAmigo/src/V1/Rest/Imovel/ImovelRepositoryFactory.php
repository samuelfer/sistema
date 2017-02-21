<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 17:12
 */

namespace SindicoAmigo\V1\Rest\Imovel;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class ImovelRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new ImovelEntity());
        $tableGateway = new TableGateway('imovel', $dbAdapter, null, $hydrator);
        $imovelRepository = new ImovelRepository($tableGateway);

        return $imovelRepository;
    }

}