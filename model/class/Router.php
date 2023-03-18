<?php

class Router
{
    private static int $urlIndex = 2;
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

    public function getUrl(): array
    {
        return $this->url;
    }

    public function getFirstPath(): string
    {
        return $this->url[0];
    }
}
