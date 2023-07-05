<?php

require 'app/persistences/blogPostData.php';



if (!empty ($_POST)) {


    $text = $_POST['text'];
    $priority = $_POST['priority'];
    $title = $_POST['title'];
    $first_date = $_POST['first_date'];
    $last_date = $_POST['last_date'];
    $users_id = $_POST['Users_id'];
    blogPostCreate ($pdo, $text, $priority, $title, $first_date, $last_date, $users_id);

    $message = "l'article a a été crée dans la bdd";


}




include 'ressources/views/createPost.tpl.php';