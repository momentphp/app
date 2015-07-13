<?php

$app->any('/pages/{page:.+}', 'Pages@display');
$app->any('/welcome', 'Pages@display')->setArgument('page', 'home');
$app->any('/', 'Pages@display')->setArgument('page', 'home')->setName('home');
