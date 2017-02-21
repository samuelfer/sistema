<?php
namespace SindicoAmigo\V1\Rest\Telefoneproprietario;

use Interop\Container\ContainerInterface;

class TelefoneproprietarioResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $telefoneproprietarioRepository = $container->get(\SindicoAmigo\V1\Rest\Telefoneproprietario\TelefoneproprietarioRepository::class);
        return new TelefoneproprietarioResource($telefoneproprietarioRepository);
    }
}
