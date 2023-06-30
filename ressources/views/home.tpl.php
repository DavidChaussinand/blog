<?php
include 'header.tpl.php';

$articles = lastBlogPosts($pdo);

?>


    
<?php if (empty($articles)) :?>
    <p> il n'y a pas d'article dans cette page <?= $article['title']; ?></p>  
<?php else : ?>
    <?php foreach ($articles as $article ) { ?> 
        <articles>
            <h3> <?= $article['title']; ?></h3>
            <p> <?= $article['text']; ?></p>
            <p> <?= $article['first_date']; ?></p>
            <p> <?= $article['name']; ?></p>
            <br>
            <br>
        </article>
    <?php } ?>
<?php endif; ?>    
     
    



<?php
include 'footer.tpl.php';
?>