<?php

return [

    'SmartyView' => [
        'name' => 'smartyView',
        'template' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'templates', 'smarty', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ],

    'TwigView' => [
        'name' => 'twigView',
        'template' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'templates', 'twig', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ]

];
