<?php

echo "voici la page de création d'article";



?>


<h1> Création d"un article</h1>


<h3> <?= $message ?? '' ?> </h3>


<form action="" method="post" >
        <p><?= $emptyText ?? ''?></p>
            <div class="form-example">
            <label for="text">le contenu de l'article: </label>
            <input type="text" name="text" id="text" value="<?= $_POST['text'] ?? '' ?>">
        </div>

        <div class="form-example">
            <label for="priority">le dégré d'importance de l'article: </label>
            <select name="priority" id="priority" value="<?= $_POST['priority'] ?? '' ?>">
                <option value="0"selected>0 </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

        </div>

        <p><?= $emptyTitle ?? ''?></p>
        <div class="form-example">
            <label for="title">Titre de l'article </label>
            <input type="text" name="title" id="title" value="<?= $_POST['title'] ?? '' ?>" >
         </div>

        <p><?= $emptyFirst_date ?? ''?></p>
        <div class="form-example">
            <label for="first_date">la date de début de la publication: </label>
            <input type="datetime-local" name="first_date" id="first_date" value="<?= $_POST['first_date'] ?? '' ?>">
        </div>
        <p><?= $emptyLast_date ?? ''?></p>
        <div class="form-example">
            <label for="last_date"> la date de fin de la publication: </label>
            <input type="datetime-local" name="last_date" id="last_date" value="<?= $_POST['last_date'] ?? '' ?>">
        </div>
        <p><?= $emptyUsers_id ?? ''?></p>
        <div class="form-example">
            <label for="Users_id">l'index de l'auteur: </label>
            <select name="Users_id"" id="Users_id"" value="<?= $_POST['Users_id"'] ?? '' ?>">
            <?php foreach ($authors as $author ) { ?>
                <option value=" <?= $author['id']?>" selected ><?= $author['id']?> (<?= $author['user_name']?>) </option>
            <?php } ?>
            </select>
        </div>

        <div>
            <a href="?action=createAuthor">Créer un auteur</a>

        </div>
<!--                <option value="1" selected>1 (matéo)</option>-->
<!--                <option value="2" >2 (Valentine)</option>-->
<!--                <option value="3">3 (Johnny)</option>-->
<!--                <option value="4">4 (Dadou-26)</option>-->
<!--                <option value="5">5 (hilalex07) </option>-->

        <br> <br>
        <div>
            <button type="submit"  name="envoyer">Envoyer</button>
        </div>
</form>


<a href='/' >retour à la page accueil</a>