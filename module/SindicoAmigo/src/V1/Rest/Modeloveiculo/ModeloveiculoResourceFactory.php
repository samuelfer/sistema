<?php
namespace SindicoAmigo\V1\Rest\Modeloveiculo;

use Interop\Container\ContainerInterface;
class ModeloveiculoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $modeloveiculo = $container->get(\SindicoAmigo\V1\Rest\Modeloveiculo\ModeloveiculoRepository::class);
        return new ModeloveiculoResource($modeloveiculo);
    }
}
