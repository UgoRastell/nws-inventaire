<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFCee2jU\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFCee2jU/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerFCee2jU.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerFCee2jU\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerFCee2jU\App_KernelProdContainer([
    'container.build_hash' => 'FCee2jU',
    'container.build_id' => '0ee6587b',
    'container.build_time' => 1699825317,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFCee2jU');
