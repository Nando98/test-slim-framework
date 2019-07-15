<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TestController {


    public function home($request, $response) {
        /*$data = array(
            'ok' => true,
            'message' => 'Servicio de prueba con slim'
        );

        $response = $response->withJson($data);
        return $response;*/
        return "Hola mundo!";
    }
}