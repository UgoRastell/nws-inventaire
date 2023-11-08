<?php

namespace ContainerLi8RPNx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2zY2Mb5Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.2zY2Mb5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2zY2Mb5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pretRepository' => ['privates', 'App\\Repository\\PretRepository', 'getPretRepositoryService', true],
        ], [
            'pretRepository' => 'App\\Repository\\PretRepository',
        ]);
    }
}
