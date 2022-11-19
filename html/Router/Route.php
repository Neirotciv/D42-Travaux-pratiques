<?php

namespace Router;

class Route
{
    private string $uri;
    private string $path;
    private string $controller;
    private string $method;

    public function __construct(string $uri, string $path)
    {
        $this->uri = $uri;
        $this->path = $path;
    }

    public function getControllerAndMethod()
    {
        $path = explode('.', $this->path);
        $this->controller = '\\Controllers\\' . ucfirst($path[0]) . 'Controller';
        $this->method = $path[1];
    }

    public function useController()
    {
        $obj = new $this->controller();
        var_dump($obj);
        $this->method;
        $method = $this->method;
        $obj->$method();
    }

    public function getUri(): string
    {
        return $this->uri;
    }
}