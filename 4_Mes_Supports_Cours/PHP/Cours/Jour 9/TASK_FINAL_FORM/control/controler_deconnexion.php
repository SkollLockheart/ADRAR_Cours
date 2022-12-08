<?php
    session_start();
    include('../vue/vue_header.php');
    include('../vue/vue_deconnexion.php');
    include('../vue/vue_footer.php');
    session_destroy();
?>