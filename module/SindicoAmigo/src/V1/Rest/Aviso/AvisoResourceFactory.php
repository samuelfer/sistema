<?php
namespace SindicoAmigo\V1\Rest\Aviso;

use Interop\Container\ContainerInterface;

class AvisoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $avisoRepositoryContainer = $container->get(\SindicoAmigo\V1\Rest\Aviso\AvisoRepository::class);
        return new AvisoResource($avisoRepositoryContainer);
    }
}
