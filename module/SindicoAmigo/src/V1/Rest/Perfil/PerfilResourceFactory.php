<?php
namespace SindicoAmigo\V1\Rest\Perfil;

use Interop\Container\ContainerInterface;

class PerfilResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Perfil\PerfilRepository::class);
        return new PerfilResource($myContainer);
    }
}
