<?php
namespace SindicoAmigo\V1\Rest\Reserva;

use Interop\Container\ContainerInterface;

class ReservaResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $reservaRepository = $container->get(\SindicoAmigo\V1\Rest\Reserva\ReservaRepository::class);
        
        //$inadimplenteTableGateway = $container->get(\SindicoAmigo\V1\Rest\Inadimplentes\InadimplentesRepository::class);
        
        return new ReservaResource($reservaRepository);
    }
}
