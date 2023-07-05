


<articles>

            <h3> <?=$article['title']; ?></h3>
            <p> <?= $article['text']; ?></p>
            <p> <?= $article['first_date']; ?></p>
            <p> <?= $article['name']; ?></p>
                <br> <br>



            <?php if (empty($comments)) :?>
                <p> il n'y a pas de commentaire dans cette article </p>
            <?php else : ?>
                <?php foreach ($comments as $comment) { ?>
                      <p><?= $comment['text']; ?></p>
                      <p>Auteur : <?= $comment['user_name']; ?></p>
                <?php } ?>
           <?php endif; ?>


   </article>


    <a href='/' >retour à la page accueil</a>

