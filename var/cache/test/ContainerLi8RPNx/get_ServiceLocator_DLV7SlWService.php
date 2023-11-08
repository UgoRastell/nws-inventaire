<?php

namespace ContainerLi8RPNx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DLV7SlWService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.DLV7SlW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DLV7SlW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'materiel' => ['privates', '.errored..service_locator.DLV7SlW.App\\Entity\\Materiel', NULL, 'Cannot autowire service ".service_locator.DLV7SlW": it references class "App\\Entity\\Materiel" but no such service exists.'],
        ], [
            'materiel' => 'App\\Entity\\Materiel',
        ]);
    }
}
