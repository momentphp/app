<?php

return [

    'prefix' => app('bundle')->fingerprint(),

    'default' => 'file',

    'stores' => [

        'file' => [
            'driver' => 'file',
            'path' => implode(DIRECTORY_SEPARATOR, [app('pathTmp'), 'cache', app('bundle')->fingerprint()]),
        ],

    ]

];
