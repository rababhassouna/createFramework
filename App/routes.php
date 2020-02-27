<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello/{name}', ['name' => 'World']));
$routes->add('bye', new Route('/bye', ['user' => new \App\Models\User(), '_controller' => 'Src\Controllers\BlogController::index']));

return $routes;
