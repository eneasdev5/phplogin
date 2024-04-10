<?php

namespace PhpLogin\controllers;

use CoffeeCode\Router\Router;
use PhpLogin\models\Users;

class DashboardController  extends Controller
{
    public function __construct(Router $router)
    {
        parent::__construct($router);
        $this->title = 'Dashboard Page';
    }

    public function home()
    {
        echo $this->getEngineView()->render(
            'dashboard',
            [
                'title' => $this->title
            ]
        );
    }

    public function profile()
    {
        $this->title = 'Profile Page';
        $user = new Users();
        $user = $user->checkLogin(['username' => $_SESSION['name']]);
        echo $this->getEngineView()->render(
            'profile',
            [
                'title' => $this->title,
                'user' => $user->data()
            ]
        );
    }
}
