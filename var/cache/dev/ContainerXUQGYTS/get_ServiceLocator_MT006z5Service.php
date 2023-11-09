<?php

namespace ContainerXUQGYTS;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MT006z5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mT006z5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mT006z5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'pret' => ['privates', '.errored..service_locator.mT006z5.App\\Entity\\Pret', NULL, 'Cannot autowire service ".service_locator.mT006z5": it references class "App\\Entity\\Pret" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'pret' => 'App\\Entity\\Pret',
        ]);
    }
}