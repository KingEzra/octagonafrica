<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json');
    return $response;
});


$app->post('/login', function (Request $request, Response $response, $args) {
    $phonenumber = $request->getParsedBody()['phonenumber'];
    $password = $request->getParsedBody()['password'];
    //$payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
    $response->getBody()->write($request->getParsedBody());
    return $response->withHeader('Content-Type', 'application/json');
    return $response;
});


$app->post('/login', function (Request $request, Response $response, $args) {
    $firstname = $request->getParsedBody()['firstname'];
    $lastname = $request->getParsedBody()['lastname'];
    $phonenumber = $request->getParsedBody()['phonenumber'];
    $password = $request->getParsedBody()['password'];
    //$payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
    $response->getBody()->write($request->getParsedBody());
    return $response->withHeader('Content-Type', 'application/json');
    return $response;
});

$app->get('/get_profile', function (Request $request, Response $response, $args) {
    $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
    $response->getBody()->write($payload);
    return $response->withHeader('Content-Type', 'application/json');
    return $response;
});


$app->run();