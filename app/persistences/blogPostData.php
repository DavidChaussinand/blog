<?php


function lastBlogPosts(PDO $pdo) :array
    {   
        $sql = file_get_contents('database/lastBlogPosts.sql'); // récupération du contenu de mon fichier lastBlogPosts.sql
        $recipesStatement = $pdo->prepare($sql);
        $recipesStatement->execute();
        $articles = $recipesStatement->fetchAll();
        return $articles;
    }

function authorsByBlogPost(PDO $pdo): array
    {
        $sql = file_get_contents('database/authorsBlogPost.sql');
        $recipesStatement = $pdo->prepare($sql);
        $recipesStatement->execute();
        $authors = $recipesStatement->fetchAll();
        return  $authors;
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

function blogPostDelete(PDO $pdo, int $id) : void {
    $sqlDeleteComment = file_get_contents('database/deleteComment.sql');
    $recipesStatementDeleteComment = $pdo ->prepare($sqlDeleteComment);
    $recipesStatementDeleteComment->bindValue(':id', $id,PDO::PARAM_INT);
    $recipesStatementDeleteComment->execute();

    $requetCategories = file_get_contents("database/deleteCategory.sql");
    $statementCategories = $pdo ->prepare($requetCategories);
    $statementCategories->bindValue(':id', $id, PDO::PARAM_INT);
    $statementCategories->execute();

    $sqlDeletePost = file_get_contents('database/deletePost.sql');
    $recipesStatementDeletePost = $pdo ->prepare($sqlDeletePost);
    $recipesStatementDeletePost->bindValue(':id', $id,PDO::PARAM_INT);
    $recipesStatementDeletePost->execute();


}

function commentsByBlogPost(PDO $pdo ,int $id): array {

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
    $recipesStatement->execute();

}
function createAuthor(PDO $pdo, $name, $nickname, $username){
    $sql = file_get_contents('database/createAuthor.sql');
    $recipesStatement = $pdo->prepare($sql);
    $recipesStatement->bindValue(':name' , $name , PDO::PARAM_STR);
    $recipesStatement->bindValue(':nickname' , $nickname , PDO::PARAM_STR);
    $recipesStatement->bindValue(':username' , $username , PDO::PARAM_STR);
    $recipesStatement->execute();

}



function blogPostUpdate(PDO $pdo, $id,$text, $priority, $title, $first_date, $last_date, $users_id) {

    $sql = file_get_contents('database/modifyPost.sql');
    $recipesStatement = $pdo->prepare($sql);
    $recipesStatement->bindValue(':id', $id, PDO::PARAM_INT);
    $recipesStatement->bindValue(':text', $text);
    $recipesStatement->bindValue(':priority', $priority, PDO::PARAM_INT);
    $recipesStatement->bindValue(':title', $title, PDO::PARAM_STR);
    $recipesStatement->bindValue(':first_date', $first_date);
    $recipesStatement->bindValue(':last_date', $last_date);
    $recipesStatement->bindValue(':users_id', $users_id, PDO::PARAM_INT);
    $recipesStatement->execute();


}

//    <div class="form-example">
//            <label for="text">le contenu de l'article: </label>
/*            <input type="text" name="text" id="text" value="<?= $_POST['text'] ?? '' ?>">*/
//    </div>




?>
