<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 01/02/17
 * Time: 21:49
 */

namespace CodeOrders\V1\Rest\Orders;


use Interop\Container\ContainerInterface;

class OrdersServiceFactory
{

    /**
     * Create an object
     * @param  ContainerInterface $container
     */
    public function __invoke(ContainerInterface $container)
    {
        $orderRepository = $container->get(\CodeOrders\V1\Rest\Orders\OrdersRepository::class);
        $usersRepository = $container->get(\CodeOrders\V1\Rest\Users\UsersRepository::class);
        $productRepository = $container->get(\CodeOrders\V1\Rest\Products\ProductsRepository::class);
        
        return new OrdersService($orderRepository, $usersRepository, $productRepository);
    }
}