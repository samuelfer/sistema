<?php

namespace CodeOrders\V1\Rest\Orders;

use Interop\Container\ContainerInterface;

class OrdersResourceFactory
{

    public function __invoke(ContainerInterface $container)
    { //ContainerInterface vai parte da PSR-11 e o ServiceManager a implementa
        $ordersRepository = $container->get(\CodeOrders\V1\Rest\Orders\OrdersRepository::class);
        $orderService = $container->get(\CodeOrders\V1\Rest\Orders\OrdersService::class);
        return new OrdersResource($ordersRepository, $orderService);

    }

}
