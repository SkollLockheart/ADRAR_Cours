<?php
    session_start();
    include('../utils/connect.php');
    include('../model/model_user.php');
    include('../vue/vue_header.php');
    $message="";
    include('../vue/vue_creationUser.php');

    if(isset($_POST['name_user']) AND $_POST['name_user'] != "" AND isset($_POST['first_name_user']) AND $_POST['first_name_user'] != "" AND isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != ""){
        $name_user = $_POST['name_user'];
        $first_name_user = $_POST['first_name_user'];
        $login_user = $_POST['login_user'];
        $mdp_user = $_POST['mdp_user'];

        $user = new User("",$name_user,$first_name_user,$login_user,$mdp_user);
        $message=$user->ajouterUser($bdd);
    }

    echo"<h3> OU </h3>";

    include('../vue/vue_connexionUser.php');

    if(isset($_POST['login_utilisateur_connexion']) AND $_POST['login_utilisateur_connexion'] != "" AND isset($_POST['mdp_utilisateur_connexion']) AND $_POST['mdp_utilisateur_connexion'] != ""){
        $login_user = $_POST['login_utilisateur_connexion'];
        $mdp_user = $_POST['mdp_utilisateur_connexion'];
        $_SESSION['login_user'] = "";
        $_SESSION['id_user'] = "";
        $_SESSION['name_user'] = "";
        $_SESSION['first_name_user'] = "";

        $user_co = new User ("","","",$login_user,$mdp_user);
        //Récupérer le login_utilisateur
        $data = $user_co -> selectUserFromLogin($bdd);
        if(!empty($data)){
            foreach($data as $row){
                if($row['mdp_user'] == $mdp_user){
                    $_SESSION['login_user'] = $row['login_user'];
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['name_user'] = $row['name_user'];
                    $_SESSION['first_name_user'] = $row['first_name_user'];

                    $_SESSION['connexion']="";
                }
            }
            $message= '<h3>'.$_SESSION['login_utilisateur'].' est bien connecté.</h3>';
        }
    }
    include('../vue/vue_footer.php');

    echo "<script>
            let message = document.querySelector('#message');
            message.innerHTML = '".$message."';
        </script>";
?>