<?php

require 'app/persistences/blogPostData.php';

// Appel de la fonction lastBlogPosts en passant les paramètres nécessaires
$articles = lastBlogPosts($pdo);

include 'ressources/views/home.tpl.php';
