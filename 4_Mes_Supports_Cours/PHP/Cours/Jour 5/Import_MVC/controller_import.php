<!--
    MON FICHIER CONTROLLER de mon architecture Model-Vue-Controler
    -> Contient TOUTE la logique du code
-->
<?php

    include('vue_import.php');


    include('connect.php');

    if(isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != "" AND isset($_FILES['file'])){
        $login_user = $_POST['login_user'];
        $mdp_user = $_POST['mdp_user'];
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $fichier = move_uploaded_file($tmpName, "./import/$name");
        $url_img = "./import/$name";

        
        //ajout du model qui va faire la requête d'enregistrement
        include('model_import_creation.php');
    }
    
    include('model_import_affiche.php');
?>