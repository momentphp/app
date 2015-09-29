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
                    'args' => [path([app('pathLogs'), app('bundles')->joinAliases()]) . '.log']
                ]
            ]
        ],

        'error' => [
            'handlers' => [
                [
                    'type' => 'Stream',
                    'args' => [path([app('pathLogs'), app('bundles')->joinAliases()]) . '.error.log']
                ]
            ]
        ],

    ]

];
