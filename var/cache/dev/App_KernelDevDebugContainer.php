<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXo2oIwx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXo2oIwx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXo2oIwx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXo2oIwx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXo2oIwx\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xo2oIwx',
    'container.build_id' => '7bda4185',
    'container.build_time' => 1706616400,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXo2oIwx');
