<?php

require 'app/persistences/blogPostData.php';

$article = blogPostById($pdo, $_GET['id']);


if (!empty ($_POST)) {

    $id= $_POST['id'];

    $text = $_POST['text'];

    $priority = $_POST['priority'];

    $title = $_POST['title'];
    $first_date = $_POST['first_date'];
    $last_date = $_POST['last_date'];
    $users_id = $_POST['Users_id'];


    $modify = blogPostUpdate($pdo ,$id, $text, $priority, $title, $first_date, $last_date, $users_id);
    $message = "l'article a été modifié";

    // affiche les données actualisées.
    $article = blogPostById($pdo , $_GET['id']);

}

include 'ressources/views/blogPostModify.tpl.php';