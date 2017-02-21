<?php
namespace SindicoAmigo\V1\Rest\Veiculomorador;

use Interop\Container\ContainerInterface;

class VeiculomoradorResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $veiculomorador = $container->get(\SindicoAmigo\V1\Rest\Veiculomorador\VeiculomoradorRepository::class);
        return new VeiculomoradorResource($veiculomorador);
    }
}
