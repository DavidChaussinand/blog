<?php
echo "voici la page de modification d'article";
?>


<h1> Modification d'un article</h1>

<h3> <?= $message ?? '' ?> </h3>

<form action="" method="post" >
    <div class="form-example">
        <input type="hidden" name="id" id="id" value="<?=$article['id'] ?>" required>
    </div>
    <?php include 'ressources/views/layouts/templateForm.tpl.php';?>

</form>


<a href='/'>retour à la page accueil</a>

