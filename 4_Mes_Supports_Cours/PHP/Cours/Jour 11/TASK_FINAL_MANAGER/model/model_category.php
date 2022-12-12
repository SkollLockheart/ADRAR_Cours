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
        protected function getId_cat(){
            return $this->id_cat;
        }
        protected function setId_cat($id_cat){
            $this->id_cat = $id_cat;
        }
        
        protected function getName_cat(){
            return $this->name_cat;
        }
        protected function setName_cat($name_cat){
            $this->name_cat = $name_cat;
        }
    }
?>