<?php

return [

    'prefix' => app('bundles')->joinAliases(),

    'default' => 'file',

    'stores' => [

        'file' => [
            'driver' => 'file',
            'path' => path([app('pathTmp'), 'cache', app('bundles')->joinAliases()]),
        ],

    ]

];
