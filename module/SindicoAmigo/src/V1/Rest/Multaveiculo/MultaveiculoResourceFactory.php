<?php
namespace SindicoAmigo\V1\Rest\Multaveiculo;

use Interop\Container\ContainerInterface; 

class MultaveiculoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $multaveiculoRepository = $container->get(\SindicoAmigo\V1\Rest\Multaveiculo\MultaveiculoRepository::class);
        return new MultaveiculoResource($multaveiculoRepository);
    }
}
