<?php
namespace SindicoAmigo\V1\Rest\Historico;

use Interop\Container\ContainerInterface;

class HistoricoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $historicoRepository = $container->get(\SindicoAmigo\V1\Rest\Historico\HistoricoRepository::class);
        return new HistoricoResource($historicoRepository);
    }
}
