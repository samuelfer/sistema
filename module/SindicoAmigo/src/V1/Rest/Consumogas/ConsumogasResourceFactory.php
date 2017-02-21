<?php
namespace SindicoAmigo\V1\Rest\Consumogas;

use Interop\Container\ContainerInterface;

class ConsumogasResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $consumogasRepository = $container->get(\SindicoAmigo\V1\Rest\Consumogas\ConsumogasRepository::class);
        return new ConsumogasResource($consumogasRepository);
    }
}
