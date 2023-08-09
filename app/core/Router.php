<?php

namespace app\core;

class Router {
    protected Request $request;
    private array $routes = [];

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function get(string $path, array $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post(string $path, array $callback): void
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve(): void
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false)
        {
            echo 'NO PAGE TO LOAD';
            exit;
        }

        $this->callAction($callback[0], $callback[1]);
    }

    private function callAction(mixed $controller, string $action): void
    {
        $controller = new $controller;
        $controller->{$action}();
    }



}