<?php

$app->any('/', 'Welcome@home')->setName('welcomeHome');
$app->any('/welcome', 'Welcome@home');
