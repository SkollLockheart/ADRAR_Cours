<?php
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