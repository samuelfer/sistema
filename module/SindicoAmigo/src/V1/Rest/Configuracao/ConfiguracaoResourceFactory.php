<?php
namespace SindicoAmigo\V1\Rest\Configuracao;

class ConfiguracaoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    { //ContainerInterface vai parte da PSR-11 e o ServiceManager a implementa
        $myContainer = $container->get('SindicoAmigo\\V1\\Rest\\Configuracao\\ConfiguracaoRepository');
        return new ConfiguracaoResource($myContainer);

    }
}
