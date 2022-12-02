<?php
    try{
        $req = $bdd -> prepare("insert into user (name_user, first_name_user, login_user, mdp_user) values (?,?,?,?)");
        $req -> bindParam(1,$name_user,PDO::PARAM_STR);
        $req -> bindParam(2,$first_name_user,PDO::PARAM_STR);
        $req -> bindParam(3,$login_user,PDO::PARAM_STR);
        $req -> bindParam(4,$mdp_user,PDO::PARAM_STR);
        $req -> execute();
        echo "<p id=\"validation\">Compte créé!</p>";
        $bdd=null;
        $req=null;
    }catch(Exception $e){
        echo "<p>".$e."</p>"; 
        $bdd=null;
        $req=null; 
    }
?>