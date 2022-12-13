<?php
    session_start();
    include('utils/connect.php');
    include('manager/manager_category.php');
    include('manager/manager_task.php');
    include('vue/vue_header.php');



    if(isset($_SESSION['connexion'])){
        include('vue/vue_task.php');

        $message_task="";
        $select_cat = "";

        $list_cat = new Manager_category("","");

        $data = $list_cat->afficherCategory($bdd);

        

        foreach($data as $row){
            $select_cat = $select_cat."<option value='".$row['id_cat']."'>".$row['name_cat']."</option>";
        }
        echo $select_cat;
        echo'<script>
            let select_cat = document.querySelector("#select_cat");
            select_cat.innerHTML = "'.$select_cat.'";
            let message_task = document.querySelector("#message_task");
            message_task.innerHTML = "'.$message_task.'";
        </script>';

        if(isset($_POST['nom_task']) AND $_POST['nom_task']!="" AND isset($_POST['content_task']) AND $_POST['content_task']!="" AND isset($_POST['date_task']) AND $_POST['date_task']!="" AND isset($_POST['id_cat']) AND $_POST['id_cat']!=""){

            $nom_task = $_POST['nom_task'];
            $content_task = $_POST['content_task'];
            $date_task = $_POST['date_task'];
            $id_cat = $_POST['id_cat'];
            $id_user = $_SESSION['id_user'];

            $task = new Manager_task("",$nom_task,$content_task,$date_task,$id_user,$id_cat);
            $message_task = $task->ajouterTask($bdd);
    
        }else{
            $message_task = "<h3>Veuillez remplir le formulaire.</h3>";
        }

        //Afficher la liste des taches en check box
        $task_list = new Manager_task ("","","","",$_SESSION['id_user'],"");
        $data = $task_list->afficherTask($bdd);
        echo"<form action=\"\" method=\"POST\">
                <fieldset><legend>Suppression tâches</legend>";
        foreach($data as $row){
            echo "<input type=\"checkbox\" name=\"box[]\" value=\"".$row['id_task']."\">
            <label for=\"".$row['nom_task']."\">".$row['nom_task']."</label><br>";
        }
        echo"<br><input type=\"submit\" value=\"Supprimer\" class=\"bouton\">
        </fieldset>
        </form>";

        if(isset($_POST['box'])){
            $box = $_POST['box'];
            $task_box = new Manager_task ("","","","","","");
            $task_box->supprimerTask($bdd,$box);
        }

    }else{
        echo '<h3>Veuilez vous connecter pour avoir accès aux tâches.</h3>';
    }

    include('vue/vue_footer.php');


?>