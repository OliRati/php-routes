<?php
require 'fonctions.php';

$pageFiltre = filter_input(INPUT_GET, 'page' , FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$page = $pageFiltre ?? 'home';

$routes = [
    'home' => 'home.php',
    'contact' => 'contact.php',
    'about' => 'about.php'
];

if (!array_key_exists($page, $routes)) {
    redirect('/404.php');
}

redirect($routes[$page]);