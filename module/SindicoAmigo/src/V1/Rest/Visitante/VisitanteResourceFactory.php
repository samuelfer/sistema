<?php
namespace SindicoAmigo\V1\Rest\Visitante;

use Interop\Container\ContainerInterface;

class VisitanteResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Visitante\VisitanteRepository::class);
        return new VisitanteResource($myContainer);
    }
}
