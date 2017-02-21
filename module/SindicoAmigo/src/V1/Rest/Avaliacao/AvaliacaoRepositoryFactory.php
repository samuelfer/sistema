<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 16:45
 */

namespace SindicoAmigo\V1\Rest\Avaliacao;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class AvaliacaoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new AvaliacaoEntity());

        $tableGateway = new TableGateway('avaliacao', $dbAdapter, null, $hydrator);

        $AvaliacaoRepository = new AvaliacaoRepository($tableGateway);

        return $AvaliacaoRepository;

    }

}