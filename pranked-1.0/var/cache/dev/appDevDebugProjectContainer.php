<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9mjhbq9\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9mjhbq9/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container9mjhbq9.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container9mjhbq9\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container9mjhbq9\appDevDebugProjectContainer([
    'container.build_hash' => '9mjhbq9',
    'container.build_id' => '92ff2ba6',
    'container.build_time' => 1607363569,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9mjhbq9');