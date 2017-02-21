<?php
namespace SindicoAmigo\V1\Rest\Proprietario;

use Interop\Container\ContainerInterface;

class ProprietarioResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Proprietario\ProprietarioRepository::class);
        return new ProprietarioResource($myContainer);
    }
}
