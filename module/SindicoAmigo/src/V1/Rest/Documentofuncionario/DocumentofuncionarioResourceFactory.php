<?php
namespace SindicoAmigo\V1\Rest\Documentofuncionario;

use Interop\Container\ContainerInterface;

class DocumentofuncionarioResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $documentofuncionarioRepository = $container->get(\SindicoAmigo\V1\Rest\Documentofuncionario\DocumentofuncionarioRepository::class);
        return new DocumentofuncionarioResource($documentofuncionarioRepository);
    }
}
