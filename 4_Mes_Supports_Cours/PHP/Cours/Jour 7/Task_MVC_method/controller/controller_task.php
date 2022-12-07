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

        $cat = new Category("",$name_cat);
        $cat->ajouterCat($bdd);
    }



    include('../vue/vue_task_creationTask.php');

    //récupérer l'id cat
    //requête pour select toute les catégories
    $category = new Category("","");
    $data_cat = $category->afficherCategory($bdd);
    //injecter le code avec JS dans mon <select>
    $list_cat = '';
    foreach($data_cat as $ligne){
        $list_cat = $list_cat.'<option value='.$ligne["id_cat"].'>'.$ligne["name_cat"].'</option>';  
    }


    if(isset($_POST['nom_task']) AND $_POST['nom_task'] != "" AND isset($_POST['content_task']) AND $_POST['content_task'] != "" AND isset($_POST['date_task']) AND $_POST['date_task'] != "" AND isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['name_cat']) AND $_POST['name_cat'] != ""){
        $nom_task = $_POST['nom_task'];
        $content_task = $_POST['content_task'];
        $date_task = $_POST['date_task'];
        $login_user = $_POST['login_user'];
        $name_cat = $_POST['name_cat'];

        //récuperer l'id user
        $user = new User("","","",$login_user,"");
        $data = $user->selectUserFromLogin($bdd);
        $id_user;
        foreach($data as $row){
            $id_users = $row['id_user'];
        }

        $task = new Task("",$nom_task,$content_task,$date_task,$id_user,$id_cat);
        $task->ajouterTask($bdd);
    }
    echo"<script defer>
            let select = document.querySelector('#select_cat');
            select.innerHTML = '".$list_cat."';
        </script>";

    include('../vue/vue_task_footer.php');
?>