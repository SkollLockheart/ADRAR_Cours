<?php
    include('connect.php');
    include('./model/model_import.php');
    include('./vue/vue_import_top.php');
    include('./vue/vue_import.php');

    if(isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != "" AND isset($_FILES['file'])){
        $login_user = $_POST['login_user'];
        $mdp_user = $_POST['mdp_user'];
        $tmpName = $_FILES['file']['tmp_name'];
        $name = $_FILES['file']['name'];
        $fichier = move_uploaded_file($tmpName, "./import/$name");
        $url_img = "./import/$name";

        creation($bdd,$login_user,$mdp_user,$tmpName,$name,$fichier,$url_img);
    }
    affiche($bdd);
    include('./vue/vue_import_bot.php');
?>