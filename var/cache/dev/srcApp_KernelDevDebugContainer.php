<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVFxt06N\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVFxt06N/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVFxt06N.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVFxt06N\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVFxt06N\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'VFxt06N',
    'container.build_id' => '88c15758',
    'container.build_time' => 1548234393,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerVFxt06N');