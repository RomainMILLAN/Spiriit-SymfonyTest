<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFLTb78c\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFLTb78c/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerFLTb78c.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerFLTb78c\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerFLTb78c\App_KernelTestDebugContainer([
    'container.build_hash' => 'FLTb78c',
    'container.build_id' => '36dfe57d',
    'container.build_time' => 1671368086,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFLTb78c');
