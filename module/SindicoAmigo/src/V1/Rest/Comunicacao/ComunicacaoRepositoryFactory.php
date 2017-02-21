<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 13:40
 */

namespace SindicoAmigo\V1\Rest\Comunicacao;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class ComunicacaoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new ComunicacaoEntity());

        $tableGateway = new TableGateway('comunicacao', $dbAdapter, null, $hydrator);

        $comunicacaoRepository = new ComunicacaoRepository($tableGateway);

        return $comunicacaoRepository;

    }

}