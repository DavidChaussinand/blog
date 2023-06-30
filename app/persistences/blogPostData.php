<?php


function lastBlogPosts(PDO $pdo)
    {   

        $articles = [];
        $sql = file_get_contents('database/lastBlogPosts.sql'); // récupération du contenu de mon fichier lastBlogPosts.sql
        $recipesStatement = $pdo->prepare($sql);
        $recipesStatement->execute();
        $articles = $recipesStatement->fetchAll();
        
        return $articles;
}