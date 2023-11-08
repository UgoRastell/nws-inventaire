<?php

namespace ContainerLTBEFTz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_ContainerLint_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.container_lint.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.container_lint.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lint:container', [], 'Ensure that arguments injected into services match type declarations', false, #[\Closure(name: 'console.command.container_lint', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand')] function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand {
            return ($container->privates['console.command.container_lint'] ?? $container->load('getConsole_Command_ContainerLintService'));
        });
    }
}
