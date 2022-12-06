<?php
    //include de la connexion
    include('../utils/connect_bdd.php');
    //include du model
    include('../model/model_article.php');
    //include de la vue
    include('../vue/vue_article.php');

    if(isset($_POST['nom_article']) and $_POST['nom_article'] != ''
    and isset($_POST['prix_article']) and $_POST['prix_article'] != ''){
        

        //récupération des données à enregistrer
        $nom_article = $_POST['nom_article'];
        $prix_article = $_POST['prix_article'];

        //appel de la fonction d'ajout de l'article
        ajouterArticle($bdd, $nom_article, $prix_article);
    }
?>