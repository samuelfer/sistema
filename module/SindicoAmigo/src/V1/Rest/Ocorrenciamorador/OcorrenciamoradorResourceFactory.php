<?php
namespace SindicoAmigo\V1\Rest\Ocorrenciamorador;

use Interop\Container\ContainerInterface;


class OcorrenciamoradorResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $ocorrenciamoradorContainer = $container->get(\SindicoAmigo\V1\Rest\Ocorrenciamorador\OcorrenciamoradorRepository::class );
        return new OcorrenciamoradorResource($ocorrenciamoradorContainer);
    }
}
