<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJYE5IS1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJYE5IS1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJYE5IS1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJYE5IS1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJYE5IS1\App_KernelDevDebugContainer([
    'container.build_hash' => 'JYE5IS1',
    'container.build_id' => 'bd5c41f2',
    'container.build_time' => 1603140308,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJYE5IS1');
