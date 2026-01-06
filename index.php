<?php
require 'fonctions.php';
require 'routes.php';

$pageFiltre = filter_input(INPUT_GET, 'page' , FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$page = $pageFiltre ?? 'home';

if (!array_key_exists($page, $routes)) {
    redirect('404.php');
}

redirect($routes[$page]);
