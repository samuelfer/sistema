<?php
namespace SindicoAmigo\V1\Rest\Faleconosco;

use Interop\Container\ContainerInterface;

class FaleconoscoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $faleconoscoContainer = $container->get(\SindicoAmigo\V1\Rest\Faleconosco\FaleconoscoRepository::class);
        return new FaleconoscoResource($faleconoscoContainer);
    }
}
