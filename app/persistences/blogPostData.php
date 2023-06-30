<?php


function lastBlogPosts(PDO $pdo)
    {   

        $articles = [];
        $sql = file_get_contents('database/lastBlogPosts.sql'); // récupération du contenu de mon fichier lastBlogPosts.sql
        $last10Articles = $sql; 
        $recipesStatement = $pdo->prepare($last10Articles);
        $recipesStatement->execute();
        $articles = $recipesStatement->fetchAll();
        
        return $articles;
}