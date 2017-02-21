<?php
namespace SindicoAmigo\V1\Rest\Avaliacao;

use Interop\Container\ContainerInterface;

class AvaliacaoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $avaliacaoRepository = $container->get(\SindicoAmigo\V1\Rest\Avaliacao\AvaliacaoRepository::class);
        return new AvaliacaoResource($avaliacaoRepository);
    }
}
