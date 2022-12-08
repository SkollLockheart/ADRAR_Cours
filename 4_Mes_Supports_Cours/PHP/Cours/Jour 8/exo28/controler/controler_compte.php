<?php
    session_start();

    include('../vue/vue_header.php');
    $message_compte ="";
    include('../vue/vue_compte.php');
    if(isset($_SESSION['connexion'])){
        $message_compte = '<h3>Login: '.$_SESSION['login_utilisateur'].'.</h3><h3>ID: '.$_SESSION['id_utilisateur'].'.</h3>';
    }else{
        echo '<h3>Personne n\'est connecté.</h3>';
    }

    include('../vue/vue_footer.php');

    echo"<script>
            let message_compte = document.querySelector('#infoUser');
            message_compte.innerHTML = \".$message_compte.\";
        </script>";
    
?>