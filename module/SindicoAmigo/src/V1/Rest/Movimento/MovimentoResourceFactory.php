<?php
namespace SindicoAmigo\V1\Rest\Movimento;

use Interop\Container\ContainerInterface;

class MovimentoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $movimentoRepository = $container->get(\SindicoAmigo\V1\Rest\Movimento\MovimentoRepository::class);
        return new MovimentoResource($movimentoRepository);
    }
}
