<?php

/**
 * App config
 */
return [

    /**
     * Encoding
     */
    'encoding' => 'UTF-8',

    /**
     * Timezone
     */
    'timezone' => 'UTC',

    /**
     * Locale
     */
    'locale' => 'en',

     /**
     * Error settings
     */
    'error' => [

        /**
         * Error level (passed to `error_reporting()`)
         */
        'level' => -1,

        /**
         * Logger name which should be used to log PHP errors (`false` to disable)
         */
        'logger' => 'app',

        /**
         * Do not log following exceptions
         */
        'skip' => [
            \Slim\Exception\NotFoundException::class,
            \Slim\Exception\MethodNotAllowedException::class,
        ],

    ],

    /**
     * Default view engine
     */
    'viewEngine' => 'twig',

    /**
     * Service providers
     */
    'providers' => [
        'smarty' => 'SmartyProvider',
        'twig' => 'TwigProvider',
    ],

    /**
     * Middlewares
     */
    'middlewares' => [

        /**
         * App-level middlewares
         */
        'app' => [
            'negotiation' => 'NegotiationMiddleware',
            'assets' => 'AssetsMiddleware',
        ],

        /**
         * Route-level middlewares
         */
        'route' => [],

    ],

    /**
     * Slim settings
     */
    'httpVersion' => '1.1',
    'responseChunkSize' => 4096,
    'outputBuffering' => 'prepend',
    'determineRouteBeforeAppMiddleware' => false,
    'displayErrorDetails' => true,

];
