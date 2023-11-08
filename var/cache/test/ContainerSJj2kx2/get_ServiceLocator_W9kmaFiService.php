<?php

namespace ContainerSJj2kx2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W9kmaFiService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.W9kmaFi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W9kmaFi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'materiel' => ['privates', '.errored..service_locator.W9kmaFi.App\\Entity\\Materiel', NULL, 'Cannot autowire service ".service_locator.W9kmaFi": it references class "App\\Entity\\Materiel" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'materiel' => 'App\\Entity\\Materiel',
        ]);
    }
}
