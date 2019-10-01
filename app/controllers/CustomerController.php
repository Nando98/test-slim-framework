<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use \Slim\Http\Response;
use PDOConnection;

class CustomerController
{
    protected $container;


    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getAll(Request $request, Response $response) {

        try {
            $cnx = PDOConnection::getConnection();
            $sql = "SELECT * FROM vis_trx_event WHERE co_event = '6A53C81C'";

            $stmt = $cnx->query($sql);
            $data = $stmt->fetchAll();

            $response = $response->withJson(\Converter::convert_from_latin1_to_utf8_recursively($data));

            return $response;
        } catch (\PDOException $e) {
            print_r($e);
        } catch (\Exception $e) {
            print_r($e);
        } finally {
            $cnx = NULL;
        }
    }
}