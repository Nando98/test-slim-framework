<?php

use Slim\App;
use Dotenv\Dotenv;

global $pdo;
global $db;

require __DIR__ . '/../../vendor/autoload.php';

// DOTENV INIT
$dotenv = Dotenv::create(__DIR__ . '/../../');
$dotenv->load();

// SLIM INIT
$app = new App([
    'settings' => [
        'displayErrorDetails' => getenv('PROJECT_DISPLAY_ERROR_DETAIL')
    ]
]);

// MIDDLEWARE INIT
require __DIR__ . '/Middleware.php';

// DEPENDENCIES INIT
require __DIR__ . '/Dependencies.php';

// UTIL INIT
require __DIR__ . '/Util.php';

// ROUTES INIT
require __DIR__ . '/Routes.php';
