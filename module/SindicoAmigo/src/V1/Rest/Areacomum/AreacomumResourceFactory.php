<?php
namespace SindicoAmigo\V1\Rest\Areacomum;

use Interop\Container\ContainerInterface;
class AreacomumResourceFactory
{
    // public function __invoke(ContainerInterface $container)
    //{
    //  return new AreacomumResource('\SindicoAmigo\V1\Rest\Areacomum\AreacomumRepository');
    //}
//}

    public function __invoke(ContainerInterface $container)
    { //ContainerInterface vai parte da PSR-11 e o ServiceManager a implementa
        $myContainer = $container->get('SindicoAmigo\\V1\\Rest\\Areacomum\\AreacomumRepository');
        return new AreacomumResource($myContainer);

    }
}
