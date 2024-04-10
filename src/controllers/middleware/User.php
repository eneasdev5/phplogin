<?php

namespace PhpLogin\controllers\middleware;

use CoffeeCode\Router\Router;

class User
{
    public function handle(Router $router): bool
    {
        $islogged = false;
        if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
            return true;
        }

        $message = urlencode('access denied');
        $router->redirect("/{$message}");
        return $islogged;
    }
}
