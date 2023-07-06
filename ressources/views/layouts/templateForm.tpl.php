
    <div class="form-example">
        <label for="text"> le contenu de l'article: </label>
        <input type="text" name="text" id="text" value="<?= $donnee['text'] ?? '' ?>">
    </div>
    <div class="form-example">
        <label for="priority">le dégré d'importance de l'article: </label>
        <select name="priority" id="priority" value="<?= $donnee['priority'] ?? '' ?>">
            <option value="0"selected>0 </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <div class="form-example">
            <label for="title">Titre de l'article </label>
            <input type="text" name="title" id="title" value="<?= $donnee['title'] ?? '' ?>" >
        </div>
        <div class="form-example">
            <label for="first_date">la date de début de la publication: </label>
            <input type="datetime-local" name="first_date" id="first_date" value="<?= $donnee['first_date'] ?? '' ?>">
        </div>
        <div class="form-example">
            <label for="last_date"> la date de fin de la publication: </label>
            <input type="datetime-local" name="last_date" id="last_date" value="<?= $donnee['last_date'] ?? '' ?>">
        </div>

        <div class="form-example">
            <label for="Users_id">l'index de l'auteur: </label>
            <select name="Users_id"" id="Users_id"" value="<?= $donnee['Users_id"'] ?? '' ?>">
            <?php foreach ($authors as $author ) { ?>
                <option value=" <?= $author['id']?>" selected ><?= $author['id']?> (<?= $author['user_name']?>) </option>
            <?php } ?>
            </select>
        </div>
        <div>
            <a href="?action=createAuthor">Créer un auteur</a>
        </div>

        <br> <br>
        <div>
            <button type="submit"  name="envoyer">Envoyer</button>
        </div>


