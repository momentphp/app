<?php

$app->any('/pages/{page:.+}', 'PagesController:display');
$app->any('/welcome', 'PagesController:display')->setArgument('page', 'home');
$app->any('/', 'PagesController:display')->setArgument('page', 'home')->setName('home');
