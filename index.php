<?php

use App\Controllers\TestController;
use Slim\App;

require 'vendor/autoload.php';

$app = new App();
$container = $app->getContainer();

$container['TestController'] = function ($container) {
    return new TestController;
};


try {

    include 'app/routes/test.php';

    $app->run();

} catch (Exception $e) {
    echo json_encode(array(
        'ok' => false,
        'message' => 'Ocurrió un problema al iniciar la aplicación.',
        'type' => $e->getTraceAsString()
    ));
}

