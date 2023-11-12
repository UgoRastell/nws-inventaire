<?php

namespace ContainerCp0S5WW;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3rtlIs4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3rtlIs4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3rtlIs4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\MaterielController::delete' => ['privates', '.service_locator.NgvlNzc', 'get_ServiceLocator_NgvlNzcService', true],
            'App\\Controller\\MaterielController::edit' => ['privates', '.service_locator.NgvlNzc', 'get_ServiceLocator_NgvlNzcService', true],
            'App\\Controller\\MaterielController::index' => ['privates', '.service_locator.YWOCxA9', 'get_ServiceLocator_YWOCxA9Service', true],
            'App\\Controller\\MaterielController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MaterielController::show' => ['privates', '.service_locator.9rl2zkG', 'get_ServiceLocator_9rl2zkGService', true],
            'App\\Controller\\PretController::delete' => ['privates', '.service_locator.gRepg0e', 'get_ServiceLocator_GRepg0eService', true],
            'App\\Controller\\PretController::edit' => ['privates', '.service_locator.gRepg0e', 'get_ServiceLocator_GRepg0eService', true],
            'App\\Controller\\PretController::index' => ['privates', '.service_locator.C9pW7V3', 'get_ServiceLocator_C9pW7V3Service', true],
            'App\\Controller\\PretController::new' => ['privates', '.service_locator.wdczQ9j', 'get_ServiceLocator_WdczQ9jService', true],
            'App\\Controller\\PretController::rappelePret' => ['privates', '.service_locator.Im7TWv0', 'get_ServiceLocator_Im7TWv0Service', true],
            'App\\Controller\\PretController::rendrePret' => ['privates', '.service_locator.BxOkYWF', 'get_ServiceLocator_BxOkYWFService', true],
            'App\\Controller\\PretController::show' => ['privates', '.service_locator.C9pW7V3', 'get_ServiceLocator_C9pW7V3Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\MaterielController:delete' => ['privates', '.service_locator.NgvlNzc', 'get_ServiceLocator_NgvlNzcService', true],
            'App\\Controller\\MaterielController:edit' => ['privates', '.service_locator.NgvlNzc', 'get_ServiceLocator_NgvlNzcService', true],
            'App\\Controller\\MaterielController:index' => ['privates', '.service_locator.YWOCxA9', 'get_ServiceLocator_YWOCxA9Service', true],
            'App\\Controller\\MaterielController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MaterielController:show' => ['privates', '.service_locator.9rl2zkG', 'get_ServiceLocator_9rl2zkGService', true],
            'App\\Controller\\PretController:delete' => ['privates', '.service_locator.gRepg0e', 'get_ServiceLocator_GRepg0eService', true],
            'App\\Controller\\PretController:edit' => ['privates', '.service_locator.gRepg0e', 'get_ServiceLocator_GRepg0eService', true],
            'App\\Controller\\PretController:index' => ['privates', '.service_locator.C9pW7V3', 'get_ServiceLocator_C9pW7V3Service', true],
            'App\\Controller\\PretController:new' => ['privates', '.service_locator.wdczQ9j', 'get_ServiceLocator_WdczQ9jService', true],
            'App\\Controller\\PretController:rappelePret' => ['privates', '.service_locator.Im7TWv0', 'get_ServiceLocator_Im7TWv0Service', true],
            'App\\Controller\\PretController:rendrePret' => ['privates', '.service_locator.BxOkYWF', 'get_ServiceLocator_BxOkYWFService', true],
            'App\\Controller\\PretController:show' => ['privates', '.service_locator.C9pW7V3', 'get_ServiceLocator_C9pW7V3Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\MaterielController::delete' => '?',
            'App\\Controller\\MaterielController::edit' => '?',
            'App\\Controller\\MaterielController::index' => '?',
            'App\\Controller\\MaterielController::new' => '?',
            'App\\Controller\\MaterielController::show' => '?',
            'App\\Controller\\PretController::delete' => '?',
            'App\\Controller\\PretController::edit' => '?',
            'App\\Controller\\PretController::index' => '?',
            'App\\Controller\\PretController::new' => '?',
            'App\\Controller\\PretController::rappelePret' => '?',
            'App\\Controller\\PretController::rendrePret' => '?',
            'App\\Controller\\PretController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\MaterielController:delete' => '?',
            'App\\Controller\\MaterielController:edit' => '?',
            'App\\Controller\\MaterielController:index' => '?',
            'App\\Controller\\MaterielController:new' => '?',
            'App\\Controller\\MaterielController:show' => '?',
            'App\\Controller\\PretController:delete' => '?',
            'App\\Controller\\PretController:edit' => '?',
            'App\\Controller\\PretController:index' => '?',
            'App\\Controller\\PretController:new' => '?',
            'App\\Controller\\PretController:rappelePret' => '?',
            'App\\Controller\\PretController:rendrePret' => '?',
            'App\\Controller\\PretController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
