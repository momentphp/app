<?php

/**
 * Cache config
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
            'path' => path([app('pathStorage'), 'cache', app()->fingerprint()]),
        ],

        'memcached' => [
            'driver'  => 'memcached',
            'servers' => [
                [
                    'host' => '127.0.0.1', 'port' => 11211, 'weight' => 100,
                ],
            ],
        ],

    ],

    /**
     * Cache key prefix
     */
    'prefix' => app()->fingerprint(),

];
