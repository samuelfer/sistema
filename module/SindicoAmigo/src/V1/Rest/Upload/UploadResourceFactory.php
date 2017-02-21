<?php
namespace SindicoAmigo\V1\Rest\Upload;

use Interop\Container\ContainerInterface;

class UploadResourceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $uplaodRepository = $container->get(\SindicoAmigo\V1\Rest\Upload\UploadRepository::class);
        return new UploadResource($uplaodRepository);
    }
}
