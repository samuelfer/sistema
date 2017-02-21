<?php
namespace SindicoAmigo\V1\Rest\Animal;

use Interop\Container\ContainerInterface;
class AnimalResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $animalRepository = $container->get(\SindicoAmigo\V1\Rest\Animal\AnimalRepository::class);
        return new AnimalResource($animalRepository);
    }
}
