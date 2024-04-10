<?php

namespace PhpLogin\controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

class Controller
{
    private $router;
    private $engine;
    private $data;

    /**
     * @param Router $router
     * @return void
     */
    public function __construct(Router $router)
    {
        $this->data = array();
        $this->router = $router;
        $this->engine = new Engine(PATH_VIEW);
    }

    /**
     * @return Router
     */
    public function getRouter(): Router
    {
        return $this->router;
    }

    /**
     * @return Engine
     */
    public function getEngineView(): Engine
    {
        return $this->engine;
    }

    /**
     * @param mixed $name
     * @param mixed $value
     * @return void
     */
    public function __set(mixed $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * @param mixed $name
     * @return mixed
     */
    public function __get(mixed $name): mixed
    {
        return $this->data[$name];
    }

    protected static function getURLEncode(string $url): string
    {
        return urlencode($url);
    }
}
