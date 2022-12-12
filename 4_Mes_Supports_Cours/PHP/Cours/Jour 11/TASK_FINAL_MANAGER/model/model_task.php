<?php
    class Task
    {
        //Attributs
        private $id_task;
        private $nom_task;
        private $content_task;
        private $date_task;
        private $id_user;
        private $id_cat;

        //Constructeur
        public function __construct($id_task,$nom_task,$content_task,$date_task,$id_user,$id_cat){
            $this->id_task = $id_task;
            $this->nom_task = $nom_task;
            $this->content_task = $content_task;
            $this->date_task = $date_task;
            $this->id_user = $id_user;
            $this->id_cat = $id_cat;
        }

        //GETTER et SETTER
        protected function getId_task(){
            return $this->id_task;
        }
        protected function setId_task($id_task){
            $this->id_task = $id_task;
        }
        
        protected function getNom_task(){
            return $this->nom_task;
        }
        protected function setNom_task($nom_task){
            $this->nom_task = $nom_task;
        }
        
        protected function getContent_task(){
            return $this->content_task;
        }
        protected function setContent_task($content_task){
            $this->content_task = $content_task;
        }
        
        protected function getDate_task(){
            return $this->date_task;
        }
        protected function setDate_task($date_task){
            $this->date_task = $date_task;
        }
        
        protected function getId_user(){
            return $this->id_user;
        }
        protected function setId_user($id_user){
            $this->id_user = $id_user;
        }
        
        protected function getId_cat(){
            return $this->id_cat;
        }
        protected function setId_cat($id_cat){
            $this->id_cat = $id_cat;
        }
    }
?>