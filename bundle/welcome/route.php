<?php

$app->any('/pages/{page:.+}', 'Pages@display');
$app->any('/', function () use ($app) {
    return $app->subRequest('GET', '/pages/home');
})->setName('home');
