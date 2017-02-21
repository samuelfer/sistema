<?php
namespace SindicoAmigo\V1\Rest\Imagem;

use Interop\Container\ContainerInterface;

class ImagemResourceFactory
{
    public function __invoke(ContainerInterface $container)
    { //ContainerInterface vai parte da PSR-11 e o ServiceManager a implementa
        //$myContainer = $container->get('SindicoAmigo\\V1\\Rest\\Areacomum\\AreacomumRepository');
        $myContainer = $container->get(\SindicoAmigo\V1\Rest\Imagem\ImagemRepository::class);
        return new ImagemResource($myContainer);

    }
}
