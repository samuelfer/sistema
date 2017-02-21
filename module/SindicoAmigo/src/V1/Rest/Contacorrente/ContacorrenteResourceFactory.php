<?php
namespace SindicoAmigo\V1\Rest\Contacorrente;

use Interop\Container\ContainerInterface;

class ContacorrenteResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $contacorrenteRepository = $container->get(\SindicoAmigo\V1\Rest\Contacorrente\ContacorrenteRepository::class);
        return new ContacorrenteResource($contacorrenteRepository);
    }
}
