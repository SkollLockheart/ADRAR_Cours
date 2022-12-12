<?php
    class Vehicule{
        private $nom;
        private $couleur;

        public function __construct($nom,$couleur){
            $this->nom = $nom;
            $this->couleur = $couleur;
        }

        protected function getNom(){
            return $this->nom;
        }

        protected function getCouleur(){
            return $this->couleur;
        }
    }
?>