<?php

/**
 * Service providers config - place service providers configuration here (keyed by provider name)
 */
return [

    'Smarty' => [
        'name' => 'smarty',
        'templates' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'templates', 'smarty', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ],

    'Twig' => [
        'name' => 'twig',
        'templates' => app('bundles')->paths('templates'),
        'compile' => path([app('pathTmp'), 'templates', 'twig', app('bundles')->joinAliases()]),
        'autoescape' => false,
    ]

];
