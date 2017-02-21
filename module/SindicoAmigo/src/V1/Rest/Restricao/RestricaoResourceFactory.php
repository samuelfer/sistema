<?php
namespace SindicoAmigo\V1\Rest\Restricao;

use Interop\Container\ContainerInterface;

class RestricaoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Restricao\RestricaoRepository::class);
        return new RestricaoResource($myContainer);
    }
}
