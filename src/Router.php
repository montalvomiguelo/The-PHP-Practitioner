<?php

namespace Acme;

use Exception;

class Router {
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestMethod)
    {
        if (! array_key_exists($uri, $this->routes[$requestMethod])) {
            throw new Exception('No route defined for this URI');
            $this->callAction();
        }

        $this->callAction(
            explode('@', $this->routes[$requestMethod][$uri])
        );

    }

    protected function callAction($controllerAction)
    {
        $controllerClass = $this->getControllerClass($controllerAction[0]);

        $action = $controllerAction[1];

        if (! method_exists($controllerClass, $action)) {
            throw new Exception(
                "{$controllerClass} does not respond to {$action} action."
            );
        }

        return (new $controllerClass)->$action();

    }

    protected function getControllerClass($controller)
    {
        return "Acme\\Controllers\\{$controller}";
    }

}
