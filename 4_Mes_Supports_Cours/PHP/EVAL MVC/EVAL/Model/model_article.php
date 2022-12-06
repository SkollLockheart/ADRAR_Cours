<?php
    function ajouter($bdd,$nom_article,$prix_article){
        try{
            $req= $bdd -> prepare("insert into article (nom_article, prix_article) values (?,?)");
            $req -> bindParam(1,$nom_article,PDO::PARAM_STR);
            $req -> bindParam(2,$prix_article,PDO::PARAM_INT);
            $req -> execute();
            echo "<br><div><p>Article ajouté à la BDD</p></div>";
            $bdd=null;
            $req=null;
        }catch(Exception $e){
            echo "<br><div><p>".$e."</p></div>"; 
            $bdd=null;
            $req=null;
        }
    }
?>

