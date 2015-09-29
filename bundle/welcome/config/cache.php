<?php

/**
 * Cache stores config
 */
return [

    /**
     * Default cache store name
     */
    'default' => 'file',

    /**
     * Cache stores
     */
    'stores' => [

        'file' => [
            'driver' => 'file',
            'path' => path([app('pathTmp'), 'cache', app('bundles')->joinAliases()]),
        ],

    ],

    /**
     * Cache key prefix
     */
    'prefix' => app('bundles')->joinAliases(),

];
