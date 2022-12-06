<?php
    //Utilitaire de connexion à la bdd ticket2
    $bdd = new PDO('mysql:host=localhost;dbname=ticket2','root','root',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>