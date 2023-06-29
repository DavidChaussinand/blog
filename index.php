<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

$routes = [
    '' => 'ressources/views/layouts/accueil.php',
    '/' => 'ressources/views/layouts/accueil.php',
    'contact' => 'ressources/views/layouts/contact.php',   //  pour aller chercher la page dans url ?action=contact

];


if (!array_key_exists($action, $routes)){
    header("HTTP/1.0 404 Not Found");
    require ('ressources/views/errors/404.php');
} else{
    require $routes[$action];
    
}


?>

