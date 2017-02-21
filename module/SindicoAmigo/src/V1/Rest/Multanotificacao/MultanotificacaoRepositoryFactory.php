<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 13:20
 */

namespace SindicoAmigo\V1\Rest\Multanotificacao;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class MultanotificacaoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new MultanotificacaoEntity());

        $tableGateway = new TableGateway('multa_notificacao', $dbAdapter, null, $hydrator);

        $multanotificacaoRepository = new MultanotificacaoRepository($tableGateway);

        return $multanotificacaoRepository;
    }

}