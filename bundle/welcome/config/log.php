<?php

return [

    'default' => 'app',

    'loggers' => [

        'app' => [
            'handlers' => [
                [
                    'type' => 'Stream',
                    'args' => [implode(DIRECTORY_SEPARATOR, [app('pathLog'), app('bundle')->fingerprint()]) . '.log']
                ]
            ]
        ],

        'error' => [
            'handlers' => [
                [
                    'type' => 'Stream',
                    'args' => [implode(DIRECTORY_SEPARATOR, [app('pathLog'), app('bundle')->fingerprint()]) . '.error.log']
                ]
            ]
        ],

    ]

];
