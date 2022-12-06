<?php
    function ajouterArticle($bdd, $nom_article, $prix_article){
        try{
            //requête préparée
            $req=$bdd->prepare('insert into article (nom_article,prix_article) Values(?,?)');
            //Binding de paramètres
            $req->bindParam(1,$nom_article,PDO::PARAM_STR);
            $req->bindParam(2,$prix_article,PDO::PARAM_INT);

            //Exécution de la requête
            $req->execute();

            //Message de confirmation
            echo '<p>'.$nom_article.' a bien été ajouté en BDD.</p>';

            //fermeture de la BDD
            $bdd=null;
            $req=null;

        }catch(Exception $error){
            die("Error : ".$error->getMessage());
            
            //fermeture de la BDD
            $bdd=null;
        }
    }
?>