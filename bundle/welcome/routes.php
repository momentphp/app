<?php

$app->get('/pages/{page:.+}', 'PagesController:display');
$app->get('/welcome', 'PagesController:display')->setArgument('page', 'home');
$app->get('/', 'PagesController:display')->setArgument('page', 'home')->setName('home');
