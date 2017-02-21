<?php
namespace SindicoAmigo\V1\Rest\Pessoa;

use Interop\Container\ContainerInterface;

class PessoaResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Pessoa\PessoaRepository::class);
        return new PessoaResource($myContainer);
    }
}
