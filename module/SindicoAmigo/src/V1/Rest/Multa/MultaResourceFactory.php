<?php
namespace SindicoAmigo\V1\Rest\Multa;

use Interop\Container\ContainerInterface;

class MultaResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $multaRepository = $container->get(\SindicoAmigo\V1\Rest\Multa\MultaRepository::class);
        return new MultaResource($multaRepository);
    }
}
