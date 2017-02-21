<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 05/02/17
 * Time: 11:50
 */

namespace CodeOrders\V1\Rest\Clients;

use CodeOrders\V1\Rest\Clients\ClientsTableGateway;
use Interop\Container\ContainerInterface;

class ClientsRepositoryFactory
{
    /**
     * Create an object
     */
    public function __invoke(ContainerInterface $container)
    {
        $tableGateway = $container->get(ClientsTableGateway::class);

        return new ClientsRepository($tableGateway);
    }

}