<?php
namespace SindicoAmigo\V1\Rest\Correspondencia;

use Interop\Container\ContainerInterface;

class CorrespondenciaResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $correspondenciaRepository = $container->get(\SindicoAmigo\V1\Rest\Correspondencia\CorrespondenciaRepository::class);
        return new CorrespondenciaResource($correspondenciaRepository);
    }
}
