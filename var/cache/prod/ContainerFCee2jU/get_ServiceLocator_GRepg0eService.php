<?php

namespace ContainerFCee2jU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GRepg0eService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.gRepg0e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gRepg0e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'pret' => ['privates', '.errored..service_locator.gRepg0e.App\\Entity\\Pret', NULL, 'Cannot autowire service ".service_locator.gRepg0e": it needs an instance of "App\\Entity\\Pret" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'pret' => 'App\\Entity\\Pret',
        ]);
    }
}