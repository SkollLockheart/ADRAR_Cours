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
        protected function getId_user(){
            return $this->id_user;
        }
        protected function setId_user($id_user){
            $this->id_user = $id_user;
        }
        
        protected function getName_user(){
            return $this->name_user;
        }
        protected function setName_user($name_user){
            $this->name_user = $name_user;
        }
        
        protected function getFirst_name_user(){
            return $this->first_name_user;
        }

        protected function setFirst_name_user($first_name_user){
            $this->first_name_user = $first_name_user;
        }
        
        protected function getLogin_user(){
            return $this->login_user;
        }
        
        protected function setLogin_user($login_user){
            $this->login_user = $login_user;
        }
        
        protected function getMdp_user(){
            return $this->mdp_user;
        }

        protected function setMdp_user($mdp_user){
            $this->mdp_user = $mdp_user;
        }
    }
?>