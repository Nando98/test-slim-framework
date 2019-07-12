<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Container\ContainerInterface;

class TestController {

    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function home(Request $request, Response $response) {
        $data = array(
            'ok' => true,
            'message' => 'Servicio de prueba con slim'
        );

        $response = $response->withJson($data);
        return $response;
    }
}