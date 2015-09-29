<?php

/**
 * Discover & require Composer autoloader (upwards in folders tree)
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
 * Define paths and optionally an environment (production by default)
 */
$services = [
    'pathBase' => $pathBase,
    'pathWeb' => __DIR__,
];

/**
 * Construct app instance with choosen bundles
 */
$app = new momentphp\App([
    app\bundle\welcome\WelcomeBundle::class => ['alias' => 'welcome'],
    momentphp\bundle\docs\DocsBundle::class => ['alias' => 'docs'],
], $services);

/**
 * Send response to the client
 */
$app->run();
