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

    class Category
    {
        private $id_cat;
        private $name_cat;

        public function __construct($id_cat,$name_cat){
            $this->id_cat = $id_cat;
            $this->name_cat = $name_cat;
        }

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
    }

    class Task
    {
        private $id_task;
        private $nom_task;
        private $content_task;
        private $date_task;
        private $id_user;
        private $id_cat;

        public function __construct($id_task,$nom_task,$content_task,$date_task,$id_user,$id_cat){
            $this->id_task = $id_task;
            $this->nom_task = $nom_task;
            $this->content_task = $content_task;
            $this->date_task = $date_task;
            $this->id_user = $id_user;
            $this->id_cat = $id_cat;
        }

        public function getId_task(){
            return $this->id_task;
        }
        public function setId_task($id_task){
            $this->id_task = $id_task;
        }
        
        public function getNom_task(){
            return $this->nom_task;
        }
        public function setNom_task($nom_task){
            $this->nom_task = $nom_task;
        }
        
        public function getContent_task(){
            return $this->content_task;
        }
        public function setContent_task($content_task){
            $this->content_task = $content_task;
        }
        
        public function getDate_task(){
            return $this->date_task;
        }
        public function setDate_task($date_task){
            $this->date_task = $date_task;
        }
        
        public function getId_user(){
            return $this->id_user;
        }
        public function setId_user($id_user){
            $this->id_user = $id_user;
        }
        
        public function getId_cat(){
            return $this->id_cat;
        }
        public function setId_cat($id_cat){
            $this->id_cat = $id_cat;
        }
    }
?>