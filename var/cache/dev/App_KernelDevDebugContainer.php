<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEwh0alu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEwh0alu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEwh0alu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEwh0alu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEwh0alu\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ewh0alu',
    'container.build_id' => '50765526',
    'container.build_time' => 1699567463,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEwh0alu');
