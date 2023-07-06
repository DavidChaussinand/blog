<?php

echo "voici la page de création d'article";



?>


<h1> Création d"un article</h1>
<h3> <?= $message ?? '' ?> </h3>

<form action="" method="post" >
    <?php include 'ressources/views/layouts/templateForm.tpl.php'; ?>

</form>
<a href='/' >retour à la page accueil</a>