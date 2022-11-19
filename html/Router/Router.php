<?php

namespace Router;

use \Routes;

// [REQUEST_METHOD] => GET
// [QUERY_STRING] => url=test
// [REQUEST_URI] => /test
// [SCRIPT_NAME] => /index.php
// [PHP_SELF] => /index.php

class Router
{
    // Liste de routes
    private array $routes = array();
    private string $requestUri;

    public function __construct()
    {
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }

    public function get($uri, $path)
    {
        $route = new Route($uri, $path);
        $route->getControllerAndMethod();
        $this->routes[] = $route;
    }

    public function useRoute()
    {
        foreach($this->routes as $route) {
            // echo '<pre>';
            // var_dump($this->requestUri);
            // var_dump($route);
            // echo '</pre>';
            if ($this->requestUri == $route->getUri()) {
                $route->useController();
            }
        }
    }
}