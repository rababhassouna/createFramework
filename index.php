<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Symfony\Component\HttpFoundation\Request;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

$routes = include __DIR__ . '/App/routes.php';
$container = include __DIR__ . '/App/container.php';

$request = Request::createFromGlobals();

try {
    $response = $container->get('framework')->handle($request);

//dd($response);
    $response->send();
} catch (\Exception $exception) {
    echo $exception;
}
