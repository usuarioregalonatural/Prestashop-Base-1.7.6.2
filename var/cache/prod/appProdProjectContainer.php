<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVlfea53\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVlfea53/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVlfea53.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVlfea53\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVlfea53\appProdProjectContainer([
    'container.build_hash' => 'Vlfea53',
    'container.build_id' => 'a8e72084',
    'container.build_time' => 1575896066,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVlfea53');