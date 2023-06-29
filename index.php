<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// déclaration du debut de la session start . on doit mettre dès l'ouverture de la balise php
// vu que l'index.php est le fichier racine qui relie les autres pages, je déclare ici.

$pagefilter = filter_input(INPUT_GET,'page',FILTER_SANITIZE_URL);

if  ($pagefilter  == ''){
require 'pages/accueil.php';
} elseif ($pagefilter == 'contact'){
require 'pages/contact.php';
} elseif ($pagefilter == 'hobby') {
require 'pages/hobby.php';
} else  {
echo "ErrorDocument 404 ";
}
?>


