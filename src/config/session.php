<?php

session_start();

const ROOT = 'http://127.0.0.1/app-php-basic/phplogin';
const PATH_VIEW = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "views/";


function uri(string $path): string
{
    if ($path) {
        return ROOT . DIRECTORY_SEPARATOR . $path;
    }
    return ROOT;
}
