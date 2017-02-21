<?php
namespace SindicoAmigo\V1\Rest\Leituragas;

use Interop\Container\ContainerInterface;

class LeituragasResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $leituragasRepository = $container->get(\SindicoAmigo\V1\Rest\Leituragas\LeituragasRepository::class);
        return new LeituragasResource($leituragasRepository);
    }
}
