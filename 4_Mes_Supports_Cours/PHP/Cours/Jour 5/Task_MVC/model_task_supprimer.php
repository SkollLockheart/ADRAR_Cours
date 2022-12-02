<!--
    MON FICHIER MODEL de mon architecture Model-Vue-Controler
    -> Contient TOUT ce qui concerne mes requêtes à la BDD
-->

<?php
try{
    foreach($account as $value){
        $req=$bdd->prepare('delete from user where id_user in (?)');
        $req -> bindParam(1,$value,PDO::PARAM_INT);
        $req->execute();
        echo "Compte supprimé!";
    }
    $bdd=null;
    $req=null;
    }catch(Exception $e){
        echo "<p>".$e."</p>"; 
        $bdd=null;
        $req=null; 
    }

?>