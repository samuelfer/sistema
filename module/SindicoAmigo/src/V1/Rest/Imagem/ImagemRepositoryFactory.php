<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 17:01
 */

namespace SindicoAmigo\V1\Rest\Imagem;

use Zend\Db\ResultSet\HydratingResultSet;
use Interop\Container\ContainerInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class ImagemRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new ImagemEntity());
        $tableGateway = new TableGateway('imagem', $dbAdapter, null, $hydrator);
        $imagemRepository = new ImagemRepository($tableGateway);

        return $imagemRepository;
    }

}