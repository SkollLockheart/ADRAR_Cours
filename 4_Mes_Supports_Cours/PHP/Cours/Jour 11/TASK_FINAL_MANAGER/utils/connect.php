<?php
    //Connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=projet_task','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>