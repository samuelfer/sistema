<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 13:52
 */

namespace SindicoAmigo\V1\Rest\Anuncio;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class AnuncioRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new AnuncioEntity());

        $tableGateway = new TableGateway('anuncio', $dbAdapter, null, $hydrator);

        $anuncioRepository = new AnuncioRepository($tableGateway);

        return $anuncioRepository;
    }

}