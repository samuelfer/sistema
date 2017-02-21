<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 14:28
 */

namespace SindicoAmigo\V1\Rest\Reserva;

//use SindicoAmigo\V1\Rest\Inadimplentes;
use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class ReservaRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new ReservaEntity());

        $tableGateway = new TableGateway('reserva_area_comum', $dbAdapter, null, $hydrator);
        
        //Pegando o servico de Inadimplentes
        $inadimplenciaTableGateway = $container->get(\SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesTableGateway::class);
        
        //Pegando o servico de Areacomum
        $areacomumTableGateway = $container->get(\SindicoAmigo\V1\Rest\Areacomum\AreacomumTableGateway::class);
        
        //Pegando o servico de Bloqueioperiodo
        $bloqueioPeriodoTableGateway = $container->get(\SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoTableGateway::class);
        
        return new ReservaRepository($tableGateway, $inadimplenciaTableGateway, $areacomumTableGateway, $bloqueioPeriodoTableGateway);

        //$reservaRepository = new ReservaRepository($tableGateway, $InadimplenteTableGateway);

        //return $reservaRepository;
    }

}