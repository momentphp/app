<?php

return [

    'SmartyView' => [
        'name' => 'smartyView',
        'templates' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'templates', 'smarty', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ],

    'TwigView' => [
        'name' => 'twigView',
        'templates' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'templates', 'twig', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ]

];
