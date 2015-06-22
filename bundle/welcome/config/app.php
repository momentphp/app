<?php

return [

    'debug' => true,

    'encoding' => 'UTF-8',

    'timezone' => 'UTC',

    'locale' => 'en',

    'error' => [
        'level' => -1,
        'logger' => false
    ],

    'template' => [
        'template' => app('bundle')->location('template'),
        'compile' => implode(DIRECTORY_SEPARATOR, [app('pathTmp'), 'template', app('bundle')->fingerprint()]),
        'escapeHtml' => false,
    ],

    'service' => [
    ],

    'middleware' => [
        'BundleAsset' => true
    ]

];
