<?php
define("PATH_PROJECT", $_SERVER['DOCUMENT_ROOT'] . "/php-routes");
define("WEB_ROOT", "./php-routes");

function dg($data)
{
    echo '<pre style="background-color: black; color: white; padding: 1rem; margin: 1rem 0">';
    var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    dg($data);
    die();
}

function redirect($url)
{
    header("Location: " . WEB_ROOT . $url);
    exit;
}
