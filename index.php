<?php

require __DIR__ . '/app/config/App.php';

try {

    $app->run();

} catch (Exception $e) {
    echo json_encode(array(
        'ok' => false,
        'message' => 'Ocurrió un problema al iniciar la aplicación.',
        'type' => array($e->getTrace())
    ));
}



