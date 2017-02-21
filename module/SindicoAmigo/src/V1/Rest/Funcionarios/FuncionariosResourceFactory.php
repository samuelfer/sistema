<?php
namespace SindicoAmigo\V1\Rest\Funcionarios;

use Interop\Container\ContainerInterface;

class FuncionariosResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Funcionarios\FuncionariosRepository::class );
        return new FuncionariosResource($myContainer);
    }
}
