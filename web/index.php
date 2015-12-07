<?php

/**
 * Discover Composer's autoloader (upwards in folders tree)
 */
$pathBase = __DIR__;
do {
    $autoload = implode(DIRECTORY_SEPARATOR, [$pathBase, 'vendor', 'autoload.php']);
    if (file_exists($autoload)) {
        require $autoload;
        break;
    }
    $pathBase = dirname($pathBase);
} while (dirname($pathBase) !== $pathBase);

/**
 * Define bundles to load
 */
$bundles = [
    momentphp\bundles\docs\Bundle::class => ['alias' => 'docs'],
    bundles\welcome\Bundle::class => ['alias' => 'welcome'],
    app\Bundle::class => ['alias' => 'app'],
];

/**
 * Define required paths and (optionally) an environment (`production` by default)
 */
$container = [
    'pathBase' => $pathBase,
    'pathWeb' => __DIR__,
    // 'env' => 'development',
];

/**
 * Construct app
 */
$app = new momentphp\App($bundles, $container);

/**
 * Send response to the client
 */
$app->run();
