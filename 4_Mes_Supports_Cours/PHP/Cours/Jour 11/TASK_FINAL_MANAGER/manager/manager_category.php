<?php
    include('model/model_category.php');
    class Manager_category extends Category{
        //METHOD
        //Method Ajouter Category
        public function ajouterCat($bdd){
            try{
                $req = $bdd -> prepare("insert into category (name_cat) values (?)");
                $name_cat=$this->getName_cat();
                $req -> bindParam(1,$name_cat,PDO::PARAM_STR);
                $req -> execute();
                echo "<p id=\"validation\">Catégorie créé!</p>";
                $bdd=null;
                $req=null;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        //Method afficher toute les category
        public function afficherCategory($bdd){
            try{
                $req=$bdd->prepare('select * from category');
                $req->execute();
                $data = $req->fetchAll();
                return $data;

            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }
    }
?>