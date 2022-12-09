<?php
    session_start();
    include('vue/vue_header.php');
    include('vue/vue_profil.php');
    if(isset($_SESSION['connexion'])){
        $message_profil = '<h3>Nom et Prénom : '.$_SESSION['name_user'].' '.$_SESSION['first_name_user'].'.</h3><h3>Login: '.$_SESSION['login_user'].'.</h3><h3>ID: '.$_SESSION['id_user'].'.</h3>';
    }else{
        $message_profil = "<h3>Personne n\'est connecté.</h3>";
    }
    include('vue/vue_footer.php');

    echo "<script>
            let message_profil = document.querySelector('#profil');
            message_profil.innerHTML = '".$message_profil."';
         </script>";
?>