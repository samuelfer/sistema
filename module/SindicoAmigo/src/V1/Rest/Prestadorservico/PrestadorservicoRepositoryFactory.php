<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 11:52
 */

namespace SindicoAmigo\V1\Rest\Prestadorservico;

use Interop\Container\ContainerInterface;
//use SindicoAmigo\V1\Rest\Condominio\CondominioEntity;
//use SindicoAmigo\V1\Rest\Condominio\CondominioRepository;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class PrestadorservicoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new PrestadorservicoEntity());

        $tableGateway = new TableGateway('prestador_servico', $dbAdapter, null, $hydrator);

        $prestadorRepository = new PrestadorservicoRepository($tableGateway);

        return $prestadorRepository;
    }

}