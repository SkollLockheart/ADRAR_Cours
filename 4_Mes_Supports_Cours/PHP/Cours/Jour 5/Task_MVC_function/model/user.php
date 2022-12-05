<?php
    class User
    {
        private $id_user;
        private $name_user;
        private $first_name_user;
        private $login_user;
        private $mdp_user;

        public function __construct($id_user,$name_user,$first_name_user,$login_user,$mdp_user){
            $this->id_user = $id_user;
            $this->name_user = $name_user;
            $this->first_name_user = $first_name_user;
            $this->login_user = $login_user;
            $this->mdp_user = $mdp_user;
        }

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
    }
?>