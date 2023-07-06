<?php

require 'app/persistences/blogPostData.php';
$authors = authorsByBlogPost($pdo);

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


$donnee=[
    'priority' =>$_POST['priority'] ?? "",
    'text' =>$_POST['text'] ?? "",
    'title' =>$_POST['title'] ?? "",
    'first_date' =>$_POST['first_date'] ?? "",
    'last_date' =>$_POST['last_date'] ?? "",
    'Users_id' =>$_POST['priority'] ?? ""
];
var_dump($donnee);
if (!empty ($_POST)) {

    $error = false;

    $priority = $donnee['priority'];
    var_dump($priority);

    $text = $donnee['text'];
    if (empty($text)) {
        $emptyText =" le contenu du text est vide , merci de le remplir";
        $error = true;
    }
    elseif (strlen($text) > 150) {
        $emptyText = " le contenu de l'article est trop long, merci de ne pas dépasser 150 caractères";
        $error = true;
    }
    elseif(strlen($text) < 5){
        $emptyText = " le contenu de l'article est trop court, mettre plus de 5 caractères";
        $error = true;
    }


    $title = $donnee['title'];
    if (empty($title)) {
        $emptyTitle =" le contenu du titre est vide , merci de le remplir";
        $error = true;
    }
    if (strlen($title) > 50) {
        $emptyTitle = " le contenu du titre est trop long, merci de ne pas dépasser 50 caractères";
        $error = true;
    }

    $first_date = $donnee['first_date'];
    if (empty($first_date)) {
        $emptyFirst_date =" mettre la date de création";
        $error = true;
    }

    $last_date = $donnee['last_date'];
    if (empty($last_date)) {
        $emptyLast_date =" mettre la date de fin de la publication";
        $error = true;
    }


    $users_id = $donnee['Users_id'];
    if (empty($users_id)) {
        $emptyUsers_id =" l'id auteur n'est pas rempli";
        $error = true;
    }


    if (!$error) {
        blogPostCreate($pdo, $text, $priority, $title, $first_date, $last_date, $users_id);
        $message = "l'article  $title a a été crée dans la bdd";
    }
}




include 'ressources/views/createPost.tpl.php';