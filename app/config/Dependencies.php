<?php

use App\Controllers\TestController;

$container = $app->getContainer();

$container['TestController'] = function () {
    return new TestController;
};