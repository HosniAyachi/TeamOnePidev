<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container744inir\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container744inir/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container744inir.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container744inir\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container744inir\appDevDebugProjectContainer(array(
    'container.build_hash' => '744inir',
    'container.build_id' => '50a557d5',
    'container.build_time' => 1550091402,
), __DIR__.\DIRECTORY_SEPARATOR.'Container744inir');