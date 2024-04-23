<?php


enum PerfilAccounts: string
{
    case ADMIN = "admin";
    case CLIENTE = 'cliente';
    case COMUN = 'comun';

    public static function is_admin(PerfilAccounts $perfil): bool
    {
        return $perfil === self::ADMIN;
    }
}




var_dump(PerfilAccounts::is_admin(PerfilAccounts::CLIENTE));
