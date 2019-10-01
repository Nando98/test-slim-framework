<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use PDOConnection;

class TestController
{

    protected $container;


    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getStatus(Request $request, Response $response)
    {
        $status = PDOConnection::getStatus();

        $data = array(
            'status' => $status
        );

        $response = $response->withJson(\Converter::convert_from_latin1_to_utf8_recursively($data));
        return $response;
    }
}