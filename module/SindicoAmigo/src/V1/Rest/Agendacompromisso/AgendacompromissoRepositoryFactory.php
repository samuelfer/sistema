<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 16:59
 */

namespace SindicoAmigo\V1\Rest\Agendacompromisso;

use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;

class AgendacompromissoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new AgendacompromissoEntity());

        $tableGateway = new TableGateway('agenda_compromisso', $dbAdapter, null, $hydrator);

        $agendaRepository = new AgendacompromissoRepository($tableGateway);

        return $agendaRepository;
    }


}