<?php
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
?>