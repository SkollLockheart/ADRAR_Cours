<?php
    session_start();
    include('utils/connect.php');
    include('model/model_category.php');
    include('model/model_task.php');
    include('vue/vue_header.php');



    if(isset($_SESSION['connexion'])){
        include('vue/vue_task.php');

        $message_task="";
        $select_cat = "";

        $list_cat = new Category("","");

        $data = $list_cat->afficherCategory($bdd);

        

        foreach($data as $row){
            echo " name: ".$row['name_cat'];
            echo " id: ".$row['id_cat'];
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

            $task = new Task("",$nom_task,$content_task,$date_task,$id_cat,$id_user);

            $message_task = $tack->ajouterTask($bdd);
    
        }else{
            $message_task = "<h3>Veuillez remplir le formulaire.</h3>";
        }


    }else{
        echo '<h3>Veuilez vous connecter pour avoir accès aux tâches.</h3>';
    }

    include('vue/vue_footer.php');


?>