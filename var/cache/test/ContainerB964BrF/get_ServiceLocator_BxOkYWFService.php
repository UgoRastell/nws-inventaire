<?php

namespace ContainerB964BrF;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BxOkYWFService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.BxOkYWF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BxOkYWF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pret' => ['privates', '.errored..service_locator.BxOkYWF.App\\Entity\\Pret', NULL, 'Cannot autowire service ".service_locator.BxOkYWF": it needs an instance of "App\\Entity\\Pret" but this type has been excluded in "config/services.yaml".'],
        ], [
            'pret' => 'App\\Entity\\Pret',
        ]);
    }
}