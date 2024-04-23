<?php

namespace PhpLogin\models;

use CoffeeCode\DataLayer\DataLayer;
use PhpLogin\controllers\middleware\User;

class Users extends DataLayer
{
    public function __construct()
    {
        parent::__construct('accounts', ['username', 'password', 'email']);
    }

    public function checkLogin(array $credenciais): ?Users
    {
        $u = $this->find("username=:username", "username=" . $credenciais['username'])->fetch();

        return $u;
    }

    public function findById(int $id, string $columns = "*"): ?Users
    {
        return parent::findById($id, $columns);
    }

    public function active_user()
    {
        if ($this->data()->is_active) {
            $this->is_active = 0;
        } else {
            $this->is_active = 1;
        }
        $this->save();
    }
}


$user = new Users;
$user->username = 'sdfds';
$user->password = password_hash('dsfsd', PASSWORD_BCRYPT);
$user->email = 'esdf@dsf.com';
$res = $user->save();

var_dump($res, $user->fail());
