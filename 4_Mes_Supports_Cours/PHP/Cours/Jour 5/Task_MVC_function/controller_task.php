<?php
    include('connect.php');
    include('./model/model_task.php');

    include('./vue/vue_task_header.php');
    include('./vue/vue_task_creation.php');



    if(isset($_POST['name_user']) AND $_POST['name_user'] != "" AND isset($_POST['first_name_user']) AND $_POST['first_name_user'] != "" AND isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != ""){
        $name_user = $_POST['name_user'];
        $first_name_user = $_POST['first_name_user'];
        $login_user = $_POST['login_user'];
        $mdp_user = $_POST['mdp_user'];

        creation($bdd,$name_user,$first_name_user,$login_user,$mdp_user);
    }
    include('./vue/vue_task_suppression_top.php');
    affiche($bdd);
    include('./vue/vue_task_suppression_bot.php');

    //test existence des champs nom_article et contenu article
    if(isset($_POST['account'])){
        $account = $_POST['account'];
        suppression($bdd,$account);
    }
    include('./vue/vue_task_footer.php');
?>