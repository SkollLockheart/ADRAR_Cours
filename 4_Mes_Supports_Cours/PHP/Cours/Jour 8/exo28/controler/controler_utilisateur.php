<?php
    include('../utils/connect.php');
    require('../model/model_utilisateur.php');

    include('../vue/vue_header.php');

    include('../vue/vue_utilisateur.php');
    $message_inscription="";
    if(isset($_POST['login_utilisateur_inscription']) AND $_POST['login_utilisateur_inscription'] != "" AND isset($_POST['mdp_utilisateur_inscription']) AND $_POST['mdp_utilisateur_inscription'] != ""){
        $login_utilisateur = $_POST['login_utilisateur_inscription'];
        $mdp_utilisateur = $_POST['mdp_utilisateur_inscription'];

        $user = new Utilisateur("",$login_utilisateur,$mdp_utilisateur);
        $message_inscription=$user->ajouterUtilisateur($bdd);

    }

    echo"<h1>OU</h1>";

    include('../vue/vue_connexion.php');

    //Vérifier les champs du formulaire connexion
    if(isset($_POST['login_utilisateur_connexion']) AND $_POST['login_utilisateur_connexion'] != "" AND isset($_POST['mdp_utilisateur_connexion']) AND $_POST['mdp_utilisateur_connexion'] != ""){
        $login_utilisateur = $_POST['login_utilisateur_connexion'];
        $mdp_utilisateur = $_POST['mdp_utilisateur_connexion'];

        //Vérifier si $login_utilisateur correspond à un login de la BDD
    }


    include('../vue/vue_footer.php');

    echo "<script>
            let message_inscription = document.querySelector('#message_inscription');
            message_inscription.innerHTML = '".$message_inscription."';
        </script>";

    session_start();
?>