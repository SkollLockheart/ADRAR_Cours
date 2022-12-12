<?php
    session_start();
    include('utils/connect.php');
    include('manager/manager_category.php');
    include('vue/vue_header.php');

    $message_cat="";

    if(isset($_SESSION['connexion'])){
        include('vue/vue_category.php');

        if(isset($_POST['name_cat']) AND $_POST['name_cat']!=""){
            $name_cat = $_POST['name_cat'];

            $category = new Manager_category("",$name_cat);

            $message_cat=$category->ajouterCat($bdd);

        }else {
            $message_cat=`<h3>Veuillez renplir le formulaire.</h3>`;
        }

        echo "<h3>Liste des Catégories :</h3><ul>";

        $list_category = new Manager_category("","");
        $data = $list_category->afficherCategory($bdd);
        foreach($data as $row){
            echo"<li>".$row['name_cat']."</li>";
        }

        echo"</ul>";

    } else {
        echo"test";
        $message_cat='<h3>Accès interdit.</h3><h3>Veuillez vous connecté!</h3>';
    }

    include('vue/vue_footer.php');
    echo '<script>
            let message_cat = document.querySelector("#message_cat");
            message_cat.innerHTML = "'.$message_cat.'";
        </script>';

?>