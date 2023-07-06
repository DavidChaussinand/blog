<?php

require 'app/persistences/blogPostData.php';

if (!empty ($_POST)){

    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $username = $_POST['user_name'];

    createAuthor($pdo, $name, $nickname, $username);
    $message = "l'auteur $name été crée dans la bdd";
}





include 'ressources/views/createAuthor.tpl.php';