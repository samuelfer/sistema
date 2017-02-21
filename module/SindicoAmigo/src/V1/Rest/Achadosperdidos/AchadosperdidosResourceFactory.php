<?php
namespace SindicoAmigo\V1\Rest\Achadosperdidos;

use Interop\Container\ContainerInterface;

class AchadosperdidosResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $achadosperdidosRepository = $container->get(\SindicoAmigo\V1\Rest\Achadosperdidos\AchadosperdidosRepository::class);
        return new AchadosperdidosResource($achadosperdidosRepository);
    }
}
