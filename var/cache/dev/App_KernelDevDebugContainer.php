<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEddjzrZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEddjzrZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEddjzrZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEddjzrZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEddjzrZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'EddjzrZ',
    'container.build_id' => 'd080201f',
    'container.build_time' => 1698394729,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEddjzrZ');
