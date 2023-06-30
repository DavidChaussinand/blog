<?php


function lastBlogPosts(PDO $pdo)
    {   

        $articles = [];


        // $last10Articles = 'SELECT * FROM articles ORDER BY id DESC LIMIT 10';
        // $recipesStatement = $pdo->prepare($last10Articles);
        // $recipesStatement->execute();

        // $articles = $recipesStatement->fetchAll();
        
        return $articles;
        

    
}

?>