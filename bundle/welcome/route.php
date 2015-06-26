<?php

$app->any('/', 'Welcome@home')->setName('home');
$app->any('/welcome', 'Welcome@home');
