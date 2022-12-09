<?php
    class User
    {
        //Attributs
        private $id_user;
        private $name_user;
        private $first_name_user;
        private $login_user;
        private $mdp_user;

        //Constructeur
        public function __construct($id_user,$name_user,$first_name_user,$login_user,$mdp_user){
            $this->id_user = $id_user;
            $this->name_user = $name_user;
            $this->first_name_user = $first_name_user;
            $this->login_user = $login_user;
            $this->mdp_user = $mdp_user;
        }

        //GETTER et SETTER
        public function getId_user(){
            return $this->id_user;
        }
        public function setId_user($id_user){
            $this->id_user = $id_user;
        }
        
        public function getName_user(){
            return $this->name_user;
        }
        public function setName_user($name_user){
            $this->name_user = $name_user;
        }
        
        public function getFirst_name_user(){
            return $this->first_name_user;
        }
        public function setFirst_name_user($first_name_user){
            $this->first_name_user = $first_name_user;
        }
        
        public function getLogin_user(){
            return $this->login_user;
        }
        public function setLogin_user($login_user){
            $this->login_user = $login_user;
        }
        
        public function getMdp_user(){
            return $this->mdp_user;
        }
        public function setMdp_user($mdp_user){
            $this->mdp_user = $mdp_user;
        }

        //METHOD
        //Method Ajouter User
        public function ajouterUser($bdd){
            try{
                $req = $bdd -> prepare("insert into user (name_user, first_name_user, login_user, mdp_user) values (?,?,?,?)");
                $name_user=$this->getName_user();
                $first_name_user=$this->getFirst_name_user();
                $login_user=$this->getLogin_user();
                $mdp_user=$this->getMdp_user();
                $req -> bindParam(1,$name_user,PDO::PARAM_STR);
                $req -> bindParam(2,$first_name_user,PDO::PARAM_STR);
                $req -> bindParam(3,$login_user,PDO::PARAM_STR);
                $req -> bindParam(4,$mdp_user,PDO::PARAM_STR);
                $req -> execute();
                return "<h3>Compte créé!</h3>";
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        //Method Afficher User
        public function afficherUser($bdd){
            try{
                $req=$bdd->prepare('select login_user, id_user from user');
                $req->execute();
                $data = $req->fetchAll();
                return $data;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        
        //Method pour selectionner un utlisateur à partir de son login
        public function selectUserFromLogin($bdd){
            $login_user = $this->getLogin_user();
            try{
                $req=$bdd->prepare('select * from user where login_user =?');
                $req->bindParam(1,$login_user,PDO::PARAM_STR);
                $req->execute();
                $data = $req->fetchAll();
                return $data;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        //Method Supprimer User
        public function deleteUser($bdd,$id_user){
            try{
                $req=$bdd->prepare('delete from user where id_user in (?)');
                $req -> bindParam(1,$id_user,PDO::PARAM_INT);
                $req->execute();
                echo "<p id=\"validation\">Compte supprimé!</p>";
            
                $bdd=null;
                $req=null;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

    }
?>