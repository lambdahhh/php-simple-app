<?php

namespace App\Core\Router;

use App\Core\MVC\Model;
use App\Core\MVC\View;

class Router implements RouterInterface
{
    private array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * @throws RouterException
     */
    public function start(string $route): string
    {
        if (isset($this->routes[$route])) {
            $model = new Model();
            $view = new View();

            $controller = new $this->routes[$route]['controller']($model, $view);
            $action = $this->routes[$route]['action'];
            return call_user_func([$controller, $action]);
        }

        throw new RouterException('Маршрут не найден');
    }
}
