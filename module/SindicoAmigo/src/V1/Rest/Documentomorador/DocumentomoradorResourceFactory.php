<?php
namespace SindicoAmigo\V1\Rest\Documentomorador;

use Interop\Container\ContainerInterface;

class DocumentomoradorResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $documentomoradorRepository = $container->get(\SindicoAmigo\V1\Rest\Documentomorador\DocumentomoradorRepository::class);
        return new DocumentomoradorResource($documentomoradorRepository);
    }
}
