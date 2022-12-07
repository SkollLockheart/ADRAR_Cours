<?php
    class Category
    {
        //Attributs
        private $id_cat;
        private $name_cat;

        //Constructeur
        public function __construct($id_cat,$name_cat){
            $this->id_cat = $id_cat;
            $this->name_cat = $name_cat;
        }

        //GETTER et SETTER
        public function getId_cat(){
            return $this->id_cat;
        }
        public function setId_cat($id_cat){
            $this->id_cat = $id_cat;
        }
        
        public function getName_cat(){
            return $this->name_cat;
        }
        public function setName_cat($name_cat){
            $this->name_cat = $name_cat;
        }

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