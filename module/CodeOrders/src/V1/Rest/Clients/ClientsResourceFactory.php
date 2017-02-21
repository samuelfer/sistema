<?php
namespace CodeOrders\V1\Rest\Clients;

use Interop\Container\ContainerInterface;

class ClientsResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $clientsRepository = $container->get(\CodeOrders\V1\Rest\Clients\ClientsRepository::class);
        return new ClientsResource($clientsRepository);
    }
}
