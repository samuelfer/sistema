<?php
namespace SindicoAmigo\V1\Rest\Morador;

use Interop\Container\ContainerInterface;

class MoradorResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $moradorRepository = $container->get(\SindicoAmigo\V1\Rest\Morador\MoradorRepository::class);
        return new MoradorResource($moradorRepository);
    }
}
