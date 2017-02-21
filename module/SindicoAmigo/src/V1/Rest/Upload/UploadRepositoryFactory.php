<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 31/01/17
 * Time: 15:42
 */

namespace SindicoAmigo\V1\Rest\Upload;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;


class UploadRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');
        $hydrator = new HydratingResultSet(new ClassMethods(), new UploadEntity());
        $tableGateway = new TableGateway('upload', $dbAdapter, null, $hydrator);
        $uploadRepository = new UploadRepository($tableGateway);
        return $uploadRepository;
    }

}