<?php
    include('../utils/connect.php');
    require('../model/user.php');
    require('../model/category.php');
    require('../model/task.php');

    include('../vue/vue_task_header.php');
    include('../vue/vue_task_creationUser.php');



    if(isset($_POST['name_user']) AND $_POST['name_user'] != "" AND isset($_POST['first_name_user']) AND $_POST['first_name_user'] != "" AND isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != ""){
        $name_user = $_POST['name_user'];
        $first_name_user = $_POST['first_name_user'];
        $login_user = $_POST['login_user'];
        $mdp_user = $_POST['mdp_user'];

        $user = new User("",$name_user,$first_name_user,$login_user,$mdp_user);
        $user->ajouterUser($bdd);
    }


    include('../vue/vue_task_suppressionUser_top.php');
    $user = new User("","","","","");
    $data = $user->afficherUser($bdd);
    foreach($data as $row){
        echo "<input type=\"checkbox\" name=\"account[]\" value=\"".$row['id_user']."\">
        <label for=\"".$row['login_user']."\">".$row['login_user']."</label><br>";
    }
    include('../vue/vue_task_suppressionUser_bot.php');

    //test existence des champs nom_article et contenu article
    if(isset($_POST['account'])){
        $account = $_POST['account'];
        $user = new User("","","","","");
        foreach($account as $row){
            $user->deleteUser($bdd,$row);
        }

    }

    include('../vue/vue_task_creationCat.php');

    if(isset($_POST['name_cat']) AND $_POST['name_cat'] != ""){
        $name_cat = $_POST['name_cat'];

        $user = new Category("",$name_cat);
        $user->ajouterUser($bdd);
    }



    include('../vue/vue_task_creationTask_top.php');
    include('../vue/vue_task_creationTask_bot.php');


    if(isset($_POST['nom_task']) AND $_POST['nom_task'] != "" AND isset($_POST['content_task']) AND $_POST['content_task'] != "" AND isset($_POST['date_task']) AND $_POST['date_task'] != ""){
        $nom_task = $_POST['nom_task'];
        $content_task = $_POST['content_task'];
        $date_task = $_POST['date_task'];

        $user = new Category("",$nom_task);
        $user->ajouterUser($bdd);
    }

    include('../vue/vue_task_footer.php');
?>