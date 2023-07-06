<?php

require 'app/persistences/blogPostData.php';


$mesFiltres=[
    'id'=> FILTER_SANITIZE_NUMBER_INT,
    'text'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'priority'=> FILTER_SANITIZE_NUMBER_INT,
    'title'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'Users_id'=> FILTER_SANITIZE_NUMBER_INT,
];
$mesInput = filter_input_array(INPUT_POST,$mesFiltres);
$text = $mesInput['text'] ?? "" ;
$title = $mesInput['title']?? "";


if (!empty ($_POST)) {

    $error = false;


    $text = $_POST['text'];
    if (empty($text)) {
        $emptyText =" le contenu du text est vide , merci de le remplir";
        $error = true;
    }

    $priority = $_POST['priority'];



    $title = $_POST['title'];
    if (empty($title)) {
        $emptyTitle =" le contenu du titre est vide , merci de le remplir";
        $error = true;
    }


    $first_date = $_POST['first_date'];
    if (empty($first_date)) {
        $emptyFirst_date =" mettre la date de création";
        $error = true;
    }

    $last_date = $_POST['last_date'];
    if (empty($last_date)) {
        $emptyLast_date =" mettre la date de fin de la publication";
        $error = true;
    }


    $users_id = $_POST['Users_id'];
    if (empty($users_id)) {
        $emptyUsers_id =" l'id auteur n'est pas rempli";
        $error = true;
    }

    if (!$error) {
        blogPostCreate($pdo, $text, $priority, $title, $first_date, $last_date, $users_id);
        $message = "l'article a a été crée dans la bdd";
    }
}




include 'ressources/views/createPost.tpl.php';