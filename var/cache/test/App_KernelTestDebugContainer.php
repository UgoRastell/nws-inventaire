<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZpni55y\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZpni55y/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerZpni55y.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerZpni55y\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerZpni55y\App_KernelTestDebugContainer([
    'container.build_hash' => 'Zpni55y',
    'container.build_id' => '72d2e957',
    'container.build_time' => 1699826881,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZpni55y');
