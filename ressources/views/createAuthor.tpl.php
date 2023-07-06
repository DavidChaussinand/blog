

<h1> Création d"un auteur</h1>

<h3> <?= $message ?? '' ?> </h3>


<form action="" method="post" >

        <div class="form-example">
            <label for="name">nom : </label>
            <input type="text" name="name" id="name" placeholder="indiquez votre nom" value="<?= $_POST['name'] ?? '' ?>">
        </div>
        <div class="form-example">
            <label for="nickname">prénom : </label>
            <input type="text" name="nickname" id="nickname" placeholder="indiquez votre prénom" value="<?= $_POST['nickname'] ?? '' ?>">
        </div>
        <div class="form-example">
            <label for="user_name">nom : </label>
            <input type="text" name="user_name" id="user_name" placeholder="indiquez votre pseudo" value="<?= $_POST['user_name'] ?? '' ?>">
        </div>
        <br>
        <div>
            <button type="submit"  name="envoyer">Envoyer</button>
        </div>
</form>


<a href='/' >retour à la page accueil</a>