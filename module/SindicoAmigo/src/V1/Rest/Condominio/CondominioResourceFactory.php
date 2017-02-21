<?php
namespace SindicoAmigo\V1\Rest\Condominio;

use Interop\Container\ContainerInterface;

class CondominioResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer =  $container->get(\SindicoAmigo\V1\Rest\Condominio\CondominioRepository::class);
        return new CondominioResource($myContainer);
    }
}
