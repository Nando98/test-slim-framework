<?php
use Slim\App;

require 'vendor/autoload.php';

$app = new App();


try {

    include 'src/routes/test.php';

    $app->run();

} catch (Exception $e) {
    echo json_encode(array(
        'ok' => false,
        'message' => 'Ocurrió un problema al iniciar la aplicación.',
        'type' => $e->getTraceAsString()
    ));
}

