<?php
namespace SindicoAmigo\V1\Rest\Garagem;

use Interop\Container\ContainerInterface;

class GaragemResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Garagem\GaragemRepository::class);
        return new GaragemResource($myContainer);
    }
}
