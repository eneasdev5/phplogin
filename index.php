<?php
require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;
use \PhpLogin\controllers\middleware\User;

$app = new Router(ROOT);

/**
 * Controller: WebController
 * Path: /*
 */
$app
    ->group(null)
    ->namespace("PhpLogin\controllers");

$app->get('/', "WebController:home");
$app->get('/{message}', "WebController:home");
$app->post('/user-auth', "WebController:user_auth");
$app->get('/logout', "WebController:logout", middleware: User::class);


/**
 * Controller: DashboardController
 * Path: /dashboard/*
 */
$app->group("dashboard")->namespace("PhpLogin\controllers");
$app->get("/", "DashboardController:home", "page.dashboard", middleware: User::class);
$app->get("/profile", "DashboardController:profile", "page.profile", middleware: User::class);


/**
 * Controller: ErrorController
 * Path: /ops/*
 */
$app->group('ops')->namespace('PhpLogin\controllers');
$app->get("/{errcode}", 'ErrorController:handler_error');

/**
 * Run App
 */
$app->dispatch();

if ($app->error()) {
    $errcode = $app->error();
    $app->redirect("/ops/{$errcode}");
}
