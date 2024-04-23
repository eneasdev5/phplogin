<?php

namespace PhpLogin\controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use PhpLogin\models\Users;

class WebController extends Controller
{
    private $user;
    public function __construct(Router $router)
    {
        parent::__construct($router);
        $this->title = 'Home Page';
    }

    public function home(array $args)
    {
        echo $this->getEngineView()->render(
            'login_view',
            $args
        );
        exit;
    }

    public function user_auth()
    {
        $credenciais = filter_var_array(
            $_POST,
            FILTER_SANITIZE_SPECIAL_CHARS
        );
        $this->user = new Users();
        $this->user = $this->user->checkLogin($credenciais);

        if (
            $this->user &&
            password_verify(
                $credenciais['password'],
                $this->user->password
            )
        ) { // password is checked true
            if ($this->user->is_active === 0) {
                session_regenerate_id();
                $this->user->active_user();
                $_SESSION['is_logged'] = (bool)$this->user->is_active;
                $_SESSION['name'] = $this->user->username;
                $_SESSION['id'] = $this->user->id;

                $this->getRouter()->redirect('/dashboard');
                exit;
            }
            $message = parent::getURLEncode(
                "sua conta já esta sendo usada por outro usuário"
            );
            $this->getRouter()->redirect("/{$message}");
            exit;
        } else {
            // evita quebrar a url
            $message = parent::getURLEncode(
                "Credenciais invalidas"
            );
            $this->getRouter()->redirect("/{$message}");
            exit;
        }
    }



    public function logout()
    {
        if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
            $this->user = new Users();
            $this->user = $this->user->findById($_SESSION['id']);
            $this->user->active_user();
            session_destroy();
        }
        $message = parent::getURLEncode("logout executado com sucesso!!!");
        $this->getRouter()->redirect("/{$message}");
    }
}
