<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 30/01/17
 * Time: 22:22
 */

namespace SindicoAmigo\V1\Rest\Faleconosco;


use Interop\Container\ContainerInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Hydrator\ClassMethods;
//use Zend\ServiceManager\Factory\FactoryInterface;

class FeedbackFaleconoscoTableGatewayFactory
{


    /**
     * Create an object
     *
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbAdapter = $container->get('DbAdapter');

        $hydrator = new HydratingResultSet(new ClassMethods(), new FeedbackFaleconoscoEntity());

        $tableGateway = new TableGateway('feedback_fale_conosco', $dbAdapter, null, $hydrator);

        return $tableGateway;

    }
}