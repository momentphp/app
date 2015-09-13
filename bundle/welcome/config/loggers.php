<?php

return [

    'default' => 'app',

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
