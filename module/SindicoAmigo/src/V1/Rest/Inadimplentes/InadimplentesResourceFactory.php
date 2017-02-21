<?php
namespace SindicoAmigo\V1\Rest\Inadimplentes;

//use Interop\Container\ContainerInterface;

class InadimplentesResourceFactory
{
    public function __invoke($container)
    {
        $inadimplentesRepository = $container->get(\SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesRepository::class);
        
        return new InadimplentesResource($inadimplentesRepository);
    }
}
