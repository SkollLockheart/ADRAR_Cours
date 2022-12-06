<?php
    include('..\Utils\connect_bdd.php');
    include('..\Model\model_article.php');

    include('..\Vue\vue_header.php');
    include('..\Vue\vue_article.php');

    if(isset($_POST['nom_article']) AND $_POST['nom_article'] != "" AND isset($_POST['prix_article']) AND $_POST['prix_article'] != ""){
        $nom_article = $_POST['nom_article'];
        $prix_article = $_POST['prix_article'];

        ajouter($bdd,$nom_article,$prix_article);
    }

    include('..\Vue\vue_footer.php');
?>
