<!--
    MON FICHIER MODEL de mon architecture Model-Vue-Controler
    -> Contient TOUT ce qui concerne mes requêtes à la BDD
-->

<?php
    try{
        $req=$bdd->prepare('select login_user, id_user from user');
        $req->execute();
        $data = $req->fetchAll();
        foreach($data as $row){
            echo "<input type=\"checkbox\" name=\"account[]\" value=\"".$row['id_user']."\">
            <label for=\"".$row['login_user']."\">".$row['login_user']."</label><br>";
        }
        $bdd=null;
        $req=null;
    }catch(Exception $e){
        echo "<p>".$e."</p>"; 
        $bdd=null;
        $req=null; 
    }
?>