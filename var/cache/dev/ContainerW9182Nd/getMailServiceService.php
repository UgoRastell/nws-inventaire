<?php

namespace ContainerW9182Nd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MailService' shared autowired service.
     *
     * @return \App\Service\MailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MailService.php';

        return $container->privates['App\\Service\\MailService'] = new \App\Service\MailService();
    }
}
