<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 17:28
 */

namespace SindicoAmigo\V1\Rest\Faleconosco;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class FaleconoscoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new CorrespondenciaEntity());

        $tableGateway = new TableGateway('correspondencia', $dbAdapter, null, $hydrator);

        $correspondenciaRepository = new CorrespondenciaRepository($tableGateway);

        return $correspondenciaRepository;
    }

}