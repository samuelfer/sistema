<?php
namespace SindicoAmigo\V1\Rest\Chaves;


use Interop\Container\ContainerInterface;
class ChavesResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $chavesRepository = $container->get(\SindicoAmigo\V1\Rest\Chaves\ChavesRepository::class);
        return new ChavesResource($chavesRepository);
    }
}
