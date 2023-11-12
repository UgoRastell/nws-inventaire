<?php

namespace ContainerZpni55y;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_MessengerTransportListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'mailer.messenger_transport_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessengerTransportListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'MessengerTransportListener.php';

        return $container->privates['mailer.messenger_transport_listener'] = new \Symfony\Component\Mailer\EventListener\MessengerTransportListener();
    }
}
