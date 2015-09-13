<?php

/**
 * Discover & require Composer autoloader
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
 * Construct app instance with choosen bundles
 */
$app = new momentphp\App([
    app\bundle\welcome\WelcomeBundle::class => ['alias' => 'welcome'],
    momentphp\bundle\docs\DocsBundle::class => ['alias' => 'docs'],
]);

/**
 * Define paths (and optionally environment - production by default)
 */
$app->service('pathWeb', __DIR__);
$app->service('pathBase', $pathBase);

/**
 * Send response to the client
 */
$app->run();
