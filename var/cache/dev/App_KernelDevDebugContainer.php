<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRxXb0vA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRxXb0vA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRxXb0vA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRxXb0vA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRxXb0vA\App_KernelDevDebugContainer([
    'container.build_hash' => 'RxXb0vA',
    'container.build_id' => '4ed9f07a',
    'container.build_time' => 1621092782,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRxXb0vA');