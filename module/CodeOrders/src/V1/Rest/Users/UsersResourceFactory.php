<?php
namespace CodeOrders\V1\Rest\Users;

use Interop\Container\ContainerInterface;

class UsersResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new UsersResource($container->get(\CodeOrders\V1\Rest\Users\UsersRepository::class));
    }
}
