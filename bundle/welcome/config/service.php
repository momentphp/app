<?php

return [

    'SmartyView' => [
        'template' => app('bundle')->location('template'),
        'compile' => path([app('pathTmp'), 'template', 'smarty', app('bundle')->fingerprint()]),
        'autoescape' => false,
    ],

    'TwigView' => [
        'template' => app('bundle')->location('template'),
        'compile' => path([app('pathTmp'), 'template', 'twig', app('bundle')->fingerprint()]),
        'autoescape' => false,
    ]

];
