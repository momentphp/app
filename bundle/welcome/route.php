<?php

$app->any('/pages/{page:.+}', 'Pages@display');
$app->any('/welcome', function () {
    return $this->subRequest('GET', '/pages/home');
});
$app->any('/', function () {
    return $this->subRequest('GET', '/pages/home');
})->setName('home');
