<!--
    UN FICHIER UTILITAIRE
    -> Contient mon objet de connexion à la BDD
-->

<?php
    //Connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=exo_import','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>