<?php

/**
 * App config
 */
return [

    /**
     * Debug flag
     */
    'debug' => true,

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
         * Logger name which should be used to log errors (`false` to disable)
         */
        'logger' => false,

        /**
         * Do not log following exceptions
         */
        'skip' => [
            \momentphp\exceptions\NotFoundException::class,
            \momentphp\exceptions\NotAllowedException::class,
        ]

    ],

    /**
     * Default view engine
     */
    'viewEngine' => 'twig',

    /**
     * Service providers
     */
    'providers' => [
        'Twig' => true,
        'Smarty' => true,
    ],

    /**
     * App-level middlewares
     */
    'middlewares' => [
        'BundleAssets' => true,
        'ContentType' => true,
    ]

];
