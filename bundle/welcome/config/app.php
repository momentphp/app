<?php

return [

    'debug' => true,

    'encoding' => 'UTF-8',

    'timezone' => 'UTC',

    'locale' => 'en',

    'error' => [
        'level' => -1,
        'logger' => false,
        'skip' => [
            \momentphp\exceptions\NotFoundException::class,
            \momentphp\exceptions\NotAllowedException::class,
        ]
    ],

    'viewService' => 'smarty',

    'providers' => [
        'Twig' => true,
        'Smarty' => true,
    ],

    'middlewares' => [
        'BundleAssets' => true,
    ]

];
