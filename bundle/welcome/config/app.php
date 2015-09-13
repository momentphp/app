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

    'services' => [
        'TwigView' => true,
        'SmartyView' => true,
    ],

    'middlewares' => [
        'BundleAssets' => true,
    ]

];
