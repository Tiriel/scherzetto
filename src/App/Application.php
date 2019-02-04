<?php

declare(strict_types=1);

namespace App;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Scherzetto\Routing\Router;

class Application
{
    protected $router;

    public function __construct(Router $router = null)
    {
        $this->router = $router ?? new Router();
    }

    public function handleRequest(RequestInterface $request): ResponseInterface
    {
        $attributes = $this->router->route($request);
        ['controller' => $controller, 'action' => $action, 'params' => $params] = $attributes;

        $namespace = '\\App\\Controller\\';
        if (!class_exists($namespace.$controller)) {
            $namespace = '\\App\\Controller\\';
        }
        $class = $namespace.$controller;

        return (new $class())->$action($request, ...$params);
    }
}
