<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 16:21
 */

namespace SindicoAmigo\V1\Rest\Restricao;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Hydrator\ClassMethods;
use Zend\Db\TableGateway\TableGateway;

class RestricaoRepositoryFactory
{
    /**
     * @param ContainerInterface $container
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new RestricaoEntity());
        $tableGateway = new TableGateway('restricao', $dbAdapter, null, $hydrator);
        $restricaoRepository = new RestricaoRepository($tableGateway);

        return $restricaoRepository;

    }

}