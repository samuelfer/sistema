<?php
namespace SindicoAmigo\V1\Rest\Segusers;

use Interop\Container\ContainerInterface;
class SegusersResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $usersContainer = $container->get(\SindicoAmigo\V1\Rest\Segusers\SegusersRepository::class);
        return new SegusersResource($usersContainer);
    }
}
