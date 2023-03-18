<?php

class Router
{
    private static int $urlIndex = 2;
    private array $routes = array();
    private array $url;

    /* On récupère l'url et on met chaque partie dans un tableau (en
    enlevant les premieres cases et les paramètres GET) */
    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = explode('/', $url[0]);


        // On enlève les deux premières case sur le tableau
        for ($i = 0; $i < self::$urlIndex; $i++) {
            array_shift($url);
        }

        $this->url = $url;
    }

    public function addRoute(string $route, string $controller, string $method)
    {
        $this->routes[$route] = array(
            'controller' => $controller,
            'method' => $method
        );
    }

    public function run()
    {
        foreach ($this->routes as $route => $controller) {
            if ($route == $this->url) {
                $controller = new $controller['controller'];
                $method = $controller['method'];
                $controller->$method();
            }
        }
    }
}
