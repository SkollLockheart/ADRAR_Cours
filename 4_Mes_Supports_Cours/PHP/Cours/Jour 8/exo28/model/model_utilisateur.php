<?php
    class Utilisateur 
    {
        //Attributs
        private $id_utilisateur;
        private $login_utilisateur;
        private $mdp_utilisateur;

        //Constructeur
        public function __construct($id_utilisateur,$login_utilisateur,$mdp_utilisateur){
            $this->id_utilisateur = $id_utilisateur;
            $this->login_utilisateur = $login_utilisateur;
            $this->mdp_utilisateur = $mdp_utilisateur;
        }

        //GETTET SETTER
        public function getId_utilisateur(){
            return $this->id_utilisateur;
        }
        public function setId_utilisateur($id_utilisateur){
            $this->id_utilisateur = $id_utilisateur;
        }
        
        public function getLogin_utilisateur(){
            return $this->login_utilisateur;
        }
        public function setLogin_utilisateur($login_utilisateur){
            $this->login_utilisateur = $login_utilisateur;
        }

        public function getMdp_utilisateur(){
            return $this->mdp_utilisateur;
        }
        public function setMdp_utilisateur($mdp_utilisateur){
            $this->mdp_utilisateur = $mdp_utilisateur;
        }

        //METHOD
        //Method Ajouter Utilisateur
        public function ajouterUtilisateur($bdd){
            try{
                $req = $bdd -> prepare("insert into utilisateur (login_utilisateur,mdp_utilisateur) values (?,?)");
                $login_utilisateur=$this->getLogin_utilisateur();
                $mdp_utilisateur=$this->getMdp_utilisateur();
                $req -> bindParam(1,$login_utilisateur,PDO::PARAM_STR);
                $req -> bindParam(2,$mdp_utilisateur,PDO::PARAM_STR);
                $req -> execute();
                $message_inscription = "<p>Compte créé!</p>";
                return $message_inscription;

            }catch(Exception $e){
                return $message_inscription = "<p>".$e."</p>"; 
            }
        }

        //Method Connexion
        public function selectUtilisateurFromLogin($bdd){
            $login_utilisateur = $this->getLogin_utilisateur();
            try{
                $req = $bdd -> prepare("select * from utilisateur where login_utilisateur = ?");
                $req -> bindParam(1,$login_utilisateur,PDO::PARAM_STR);
                $req -> execute();
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