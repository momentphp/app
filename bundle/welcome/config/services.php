<?php

return [

    'SmartyView' => [
        'name' => 'smartyView',
        'template' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'template', 'smarty', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ],

    'TwigView' => [
        'name' => 'twigView',
        'template' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'template', 'twig', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ]

];
