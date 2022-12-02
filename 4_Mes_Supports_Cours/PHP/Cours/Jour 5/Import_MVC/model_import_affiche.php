<!--
    MON FICHIER MODEL de mon architecture Model-Vue-Controler
    -> Contient TOUT ce qui concerne mes requêtes à la BDD
-->

<?php
    $req = $bdd -> prepare("select url_img, login_user FROM image INNER JOIN users ON users.id_user = image.id_user");
    $req -> execute();
    $data = $req -> fetchAll();
    foreach($data as $row){
        echo "<br>User : ".$row['login_user']." <br>Avatar :<br><img src=\"".$row['url_img']."\" alt=\"\"> ";
    }
    $req = null;
    $bdd = null;
?>