<?php
    // function creation($bdd,$name_user,$first_name_user,$login_user,$mdp_user){
    //     try{
    //         $req = $bdd -> prepare("insert into user (name_user, first_name_user, login_user, mdp_user) values (?,?,?,?)");
    //         $req -> bindParam(1,$name_user,PDO::PARAM_STR);
    //         $req -> bindParam(2,$first_name_user,PDO::PARAM_STR);
    //         $req -> bindParam(3,$login_user,PDO::PARAM_STR);
    //         $req -> bindParam(4,$mdp_user,PDO::PARAM_STR);
    //         $req -> execute();
    //         echo "<p id=\"validation\">Compte créé!</p>";
    //         $bdd=null;
    //         $req=null;
    //     }catch(Exception $e){
    //         echo "<p>".$e."</p>"; 
    //         $bdd=null;
    //         $req=null; 
    //     }
    // }

    // function affiche($bdd){
    //     try{
    //         $req=$bdd->prepare('select login_user, id_user from user');
    //         $req->execute();
    //         $data = $req->fetchAll();
    //         foreach($data as $row){
    //             echo "<input type=\"checkbox\" name=\"account[]\" value=\"".$row['id_user']."\">
    //             <label for=\"".$row['login_user']."\">".$row['login_user']."</label><br>";
    //         }
    //         $bdd=null;
    //         $req=null;
    //     }catch(Exception $e){
    //         echo "<p>".$e."</p>"; 
    //         $bdd=null;
    //         $req=null; 
    //     }
    // }

    // function suppression($bdd,$account){
    //     try{
    //         foreach($account as $value){
    //             $req=$bdd->prepare('delete from user where id_user in (?)');
    //             $req -> bindParam(1,$value,PDO::PARAM_INT);
    //             $req->execute();
    //             echo "<p id=\"validation\">Compte supprimé!</p>";
    //     }
    //     $bdd=null;
    //     $req=null;
    //     }catch(Exception $e){
    //         echo "<p>".$e."</p>"; 
    //         $bdd=null;
    //         $req=null; 
    //     }
    // }
?>