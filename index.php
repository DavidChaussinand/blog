<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

require 'config/database.php';


$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

$routes = [
    '' => 'app/controllers/homeController.php',
    'contact' => 'ressources/views/layouts/contact.php',   //  pour aller chercher la page dans url ?action=contact
    'blogpost'=> 'app/controllers/blogPostController.php',
    'createpost' => 'app/controllers/blogPostCreateController.php',
];

ob_start(); //commence la mise en tampon de sortie
if (!array_key_exists($action, $routes)){
    // Si la page demandée n'existe pas dans $routes, renvoyer une erreur 404
    header("HTTP/1.0 404 Not Found");
    require ('ressources/views/errors/404.php');
} else{
    // si la page demande existe dans $routes, inclure le fichier PHP correspondant
    require $routes[$action];
}
$render = ob_get_clean(); // récupère le contenu du tampon et le stocke dans $rendre
echo $render; // affiche le contenu stocké dans $render

?>

