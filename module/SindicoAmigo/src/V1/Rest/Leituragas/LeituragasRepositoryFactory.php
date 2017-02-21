<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 16:15
 */

namespace SindicoAmigo\V1\Rest\Leituragas;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class LeituragasRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new LeituragasEntity());
        $tableGateway = new TableGateway('leitura_gas', $dbAdapter, null, $hydrator);
        $leituragasRepository = new LeituragasRepository($tableGateway);

        return $leituragasRepository;
    }

}