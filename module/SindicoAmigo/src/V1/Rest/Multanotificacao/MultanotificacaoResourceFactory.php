<?php
namespace SindicoAmigo\V1\Rest\Multanotificacao;

use Interop\Container\ContainerInterface;

class MultanotificacaoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $multanotificacao = $container->get(\SindicoAmigo\V1\Rest\Multanotificacao\MultanotificacaoRepository::class);
        return new MultanotificacaoResource($multanotificacao);
    }
}
