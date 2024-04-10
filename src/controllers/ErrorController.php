<?php

namespace PhpLogin\controllers;

use CoffeeCode\Router\Router;

class ErrorController extends Controller
{
    public function __construct(Router $router)
    {
        parent::__construct($router);
        $this->title = 'Error Page';
    }

    public function handler_error(array $args)
    {
        echo $this->getEngineView()->render(
            'error',
            [
                'title' => $this->title,
                'errcode' => $args['errcode']
            ]
        );
        exit;
    }
}
