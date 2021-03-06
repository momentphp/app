<?php

/**
 * Database config
 */
return [

    /**
     * PDO fetch style
     */
    'fetch' => PDO::FETCH_ASSOC,

    /**
     * Default database connection name
     */
    'default' => 'mysql',

    /**
     * Database connections
     */
    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'momentphp',
            'username'  => 'momentphp',
            'password'  => '123',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

    ]

];
