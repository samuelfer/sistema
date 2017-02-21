<?php
namespace SindicoAmigo\V1\Rest\Anuncio;

use Interop\Container\ContainerInterface;

class AnuncioResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $repositoryAnuncio = $container->get(\SindicoAmigo\V1\Rest\Anuncio\AnuncioRepository::class);
        return new AnuncioResource($repositoryAnuncio);
    }
}
