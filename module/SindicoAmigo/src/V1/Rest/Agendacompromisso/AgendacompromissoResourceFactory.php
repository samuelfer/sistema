<?php
namespace SindicoAmigo\V1\Rest\Agendacompromisso;

use Interop\Container\ContainerInterface;

class AgendacompromissoResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $agendacompromissoContainer = $container->get(\SindicoAmigo\V1\Rest\Agendacompromisso\AgendacompromissoRepository::class);
        return new AgendacompromissoResource($agendacompromissoContainer);
    }
}
