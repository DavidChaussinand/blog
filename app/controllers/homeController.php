<?php

require_once 'app/persistences/blogPostData.php';

// Appel de la fonction lastBlogPosts en passant les paramètres nécessaires
$lastblogPosts = lastBlogPosts($pdo);

// Affichage de la valeur de retour avec var_dump
var_dump($lastblogPosts);
