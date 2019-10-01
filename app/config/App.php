<?php

use Slim\App;
use Slim\Container;
use Dotenv\Dotenv;

require __DIR__ . '/../../vendor/autoload.php';

// DOTENV INIT
$dotenv = Dotenv::create(__DIR__ . '/../../');
$dotenv->load();

// SETTINGS INIT
$settings = __DIR__ . '/Settings.php';

// SLIM INIT
$container = new Container(array($settings));
$app = new App($container);

// MIDDLEWARE INIT
require __DIR__ . '/Middleware.php';

// DEPENDENCIES INIT
require __DIR__ . '/Dependencies.php';

// UTIL INIT
require __DIR__ . '/Util.php';

// ROUTES INIT
require __DIR__ . '/Routes.php';
