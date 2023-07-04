<?php


function lastBlogPosts(PDO $pdo) :array
    {   

        $sql = file_get_contents('database/lastBlogPosts.sql'); // récupération du contenu de mon fichier lastBlogPosts.sql
        $recipesStatement = $pdo->prepare($sql);
        $recipesStatement->execute();
        $articles = $recipesStatement->fetchAll();
        return $articles;
    }

function blogPostById(PDO $pdo ,int $id) : array
    {
        $sql = file_get_contents('database/blogPost.sql');
        $recipesStatement = $pdo->prepare($sql);
        $recipesStatement->bindValue(':id', $id,PDO::PARAM_INT);
        $recipesStatement->execute();
        $article = $recipesStatement->fetch();
        return $article;

    }

function CommentsByBlogPost(PDO $pdo ,int $id): array {

    $sql = file_get_contents('database/commentsBlogPost.sql');
    $recipesStatement = $pdo->prepare($sql);
    $recipesStatement->bindValue(':id', $id, PDO::PARAM_INT);
    $recipesStatement->execute();
    $comments = $recipesStatement->fetchAll();
    return $comments;
}

function blogPostCreate(PDO $pdo , $text, $priority, $title, $first_date, $last_date, $users_id){


    // $sql= 'INSERT INTO articles VALUES (NULL,:text, :priority, :title, :first_date, :last_date, :users_id)';
    // valeur NULL dans le tableau VALUES car avec cette méthode il faut une valeur par colonne de ma table.

    $sql = file_get_contents('database/createPost.sql');
    $recipesStatement = $pdo->prepare($sql);
    $recipesStatement->bindValue(':text' , $text , PDO::PARAM_STR);
    $recipesStatement->bindValue(':priority' , $priority, PDO::PARAM_INT);
    $recipesStatement->bindValue(':title' , $title , PDO::PARAM_STR);
    $recipesStatement->bindValue(':first_date' , $first_date );
    $recipesStatement->bindValue(':last_date' , $last_date  );
    $recipesStatement->bindValue(':users_id' , $users_id , PDO::PARAM_INT);
    $addArticle = $recipesStatement->execute();


    if(isset($_POST['envoyer'])){
        if ($addArticle){
            echo" l'article a été crée"; ?>
            <br><br>
            <a href='/' >retour à la page accueil</a>
            <br><br><br>
            <?php
        } else{
            echo"l'article n'a pas été créer";
        }
    }


}
?>
