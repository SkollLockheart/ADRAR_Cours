<!--
    MON FICHIER CONTROLLER de mon architecture Model-Vue-Controler
    -> Contient TOUTE la logique du code
-->
<?php
    //connexion à la BDD
    include('connect.php');

    //ajout de la vue
    include('vue_task.php');



    if(isset($_POST['name_user']) AND $_POST['name_user'] != "" AND isset($_POST['first_name_user']) AND $_POST['first_name_user'] != "" AND isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != ""){
        $name_user = $_POST['name_user'];
        $first_name_user = $_POST['first_name_user'];
        $login_user = $_POST['login_user'];
        $mdp_user = $_POST['mdp_user'];

        include('model_task_creation.php');
    }

    //test existence des champs nom_article et contenu article
    if(isset($_POST['account'])){

        //création des 1 variables qui vont récupérer le contenu des super globales POST
        $account = $_POST['account'];
        
        //ajout du model qui va faire la requête d'enregistrement
        include('model_task_supprimer.php.');

    }
?>