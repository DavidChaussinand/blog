<?php
include 'layouts/header.tpl.php';

?>

    <a href="?action=createpost">Créer un article</a>


<br>
<?php if (empty($articles)) :?>
    <p> il n'y a pas d'article dans cette page </p>
<?php else : ?>
    <?php foreach ($articles as $article ) { ?> 
        <articles>

            <h3> <?= $article['title']; ?></h3>
            <p> <?= $article['text']; ?></p>
            <p> <?= $article['first_date']; ?></p>
            <p> <?= $article['name']; ?></p>
            <a href="?action=blogpost&id=<?=$article['id']?>">afficher l'article</a>
        <br>
            <a href="?action=blogPostModify&id=<?=$article['id']?>">modification de l'article</a>
        </article>
    <?php } ?>
<?php endif; ?>    
     
    



<?php
include 'layouts/footer.tpl.php';
?>