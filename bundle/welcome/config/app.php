<?php

return [

    'debug' => true,

    'encoding' => 'UTF-8',

    'timezone' => 'UTC',

    'locale' => 'en',

    'error' => [
        'level' => -1,
        'logger' => false,
    ],

    'viewService' => 'twigView',

    'service' => [
        'TwigView' => true,
        'SmartyView' => false,
    ],

    'middleware' => [
        'BundleAsset' => true,
    ]

];
