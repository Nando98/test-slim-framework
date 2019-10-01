<?php

use App\Controllers\CustomerController;
use App\Controllers\TestController;

$version = getenv('PROJECT_API_VERSION');

$app->group('/api/'.$version.'/test', function () use ($app) {
    $app->get('/status', TestController::class.':getStatus');
    $app->get('/customer', CustomerController::class.':getAll');
});

