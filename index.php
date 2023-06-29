<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




$pagefilter = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

$routes = [
    '' => 'pages/accueil.php',
    'contact' => 'pages/contact.php',
    'hobby' => 'pages/hobby.php'
];


if (isset($routes[$pagefilter])) {
    require $routes[$pagefilter];
} else {
    echo "ErrorDocument 404";
}


?>