<?php
echo "voici la page de modification d'article";
?>

<h1> Modification d'un article</h1>

<form action="" method="post" >

    <div class="form-example">
        <label for="text">le contenu de l'article: </label>
        <input type="text" name="text" id="text" required>
    </div>
    <div class="form-example">
        <label for="priority">le dégré d'importance de l'article: </label>
        <input type="number" name="priority" id="priority" required>
    </div>
    <div class="form-example">
        <label for="title">Titre de l'article </label>
        <input type="text" name="title" id="title" required>
    </div>
    <div class="form-example">
        <label for="first_date">la date de début de la publication: </label>
        <input type="datetime-local" name="first_date" id="first_date" required>
    </div>
    <div class="form-example">
        <label for="last_date"> la date de fin de la publication: </label>
        <input type="datetime-local" name="last_date" id="last_date" required>
    </div>
    <div class="form-example">
        <label for="Users_id">le dégré d'importance de l'article: </label>
        <input type="number" name="Users_id" id="Users_id" required>
    </div>

    <div >
        <button type="submit"  name="envoyer">Envoyer</button>
    </div>
</form>


<a href='/'>retour à la page accueil</a>


