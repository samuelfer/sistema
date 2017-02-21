<?php
namespace SindicoAmigo\V1\Rest\Bloqueioperiodo;

use Interop\Container\ContainerInterface;

class BloqueioperiodoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $bloqueioPeridoContainer = $container->get(\SindicoAmigo\V1\Rest\Bloqueioperiodo\BloqueioperiodoRepository::class);
        return new BloqueioperiodoResource($bloqueioPeridoContainer);
    }
}
