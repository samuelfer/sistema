<?php
namespace SindicoAmigo\V1\Rest\Ocorrenciaporteiro;

use Interop\Container\ContainerInterface;

class OcorrenciaporteiroResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $ocorrenciaporteiroContainer = $container->get(\SindicoAmigo\V1\Rest\Ocorrenciaporteiro\OcorrenciaporteiroRepository::class);
        return new OcorrenciaporteiroResource($ocorrenciaporteiroContainer);
    }
}
