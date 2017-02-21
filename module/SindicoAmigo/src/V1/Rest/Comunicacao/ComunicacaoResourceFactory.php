<?php
namespace SindicoAmigo\V1\Rest\Comunicacao;

use Interop\Container\ContainerInterface;

class ComunicacaoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $comunicacaoRepository = $container->get(\SindicoAmigo\V1\Rest\Comunicacao\ComunicacaoRepository::class);
        return new ComunicacaoResource($comunicacaoRepository);
    }
}
