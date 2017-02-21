<?php
namespace SindicoAmigo\V1\Rest\Imovel;

use Interop\Container\ContainerInterface;

class ImovelResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $imovelContainer = $container->get(\SindicoAmigo\V1\Rest\Imovel\ImovelRepository::class);
        return new ImovelResource($imovelContainer);
    }
}
