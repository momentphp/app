<?php

/**
 * Loggers config
 */
return [

    /**
     * Default logger name
     */
    'default' => 'app',

    /**
     * Loggers
     */
    'loggers' => [

        'app' => [
            'handlers' => [
                [
                    'type' => 'Stream',
                    'args' => [path([app('pathStorage'), 'logs', app()->fingerprint()]) . '.log']
                ]
            ]
        ],

        'error' => [
            'handlers' => [
                [
                    'type' => 'Stream',
                    'args' => [path([app('pathStorage'), 'logs', app()->fingerprint()]) . '.error.log']
                ]
            ]
        ],

    ]

];
