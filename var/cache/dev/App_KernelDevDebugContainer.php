<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ2dAhnA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ2dAhnA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ2dAhnA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ2dAhnA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ2dAhnA\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q2dAhnA',
    'container.build_id' => '26682eb0',
    'container.build_time' => 1604675708,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ2dAhnA');