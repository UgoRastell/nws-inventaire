<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZpp3jUr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZpp3jUr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZpp3jUr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZpp3jUr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZpp3jUr\App_KernelDevDebugContainer([
    'container.build_hash' => 'Zpp3jUr',
    'container.build_id' => 'c615fd43',
    'container.build_time' => 1699995458,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZpp3jUr');
