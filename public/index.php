<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';


// set database configuration
$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->safeLoad();

// created slim app instance
$app = AppFactory::create();

// route
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->run();