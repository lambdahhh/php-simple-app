<?php


use App\Core\Router\Router;

require __DIR__.'/../vendor/autoload.php';

$routes = include '../config/routes.php';

$router = new Router($routes);

$path = $_SERVER['REQUEST_URI'];

try {
    echo $router->start($path);

} catch (Throwable $e) {
    echo $e->getMessage();
}
