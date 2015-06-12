<?php
/**
 * Discover & require Composer autoloader
 */
$path = __DIR__;
do {
    $path = dirname($path);
    $autoload = implode(DIRECTORY_SEPARATOR, [$path, 'vendor', 'autoload.php']);
    if (file_exists($autoload)) {
        require $autoload;
        break;
    }
} while (dirname($path) !== $path);

/**
 * Construct app instance with choosen bundles
 */
$app = new moment\App([
    new app\bundle\welcome\WelcomeBundle
]);

/**
 * Define paths & environment (production by default)
 */
$app->service('pathBase', dirname(__DIR__));
$app->service('pathWeb', __DIR__);

/**
 * Send response to the client
 */
$app->run();
