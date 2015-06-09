<?php
/**
 * Require Composer autoloader
 */
require implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);

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
