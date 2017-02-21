<?php
namespace SindicoAmigo\V1\Rest\Prestadorservico;

use Interop\Container\ContainerInterface;
class PrestadorservicoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $prestadorRepository = $container->get(\SindicoAmigo\V1\Rest\Prestadorservico\PrestadorservicoRepository::class);
        return new PrestadorservicoResource($prestadorRepository);
    }
}
