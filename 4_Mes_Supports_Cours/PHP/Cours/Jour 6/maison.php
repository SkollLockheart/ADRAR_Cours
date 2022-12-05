<?php
    class Maison
    {
        private $nom;
        private $longueur;
        private $largeur;
        private $nbEtage;

        public function __construct($nom,$longueur,$largeur,$nbEtage){
            $this->nom =  $nom;
            $this->longueur = $longueur;
            $this->largeur = $largeur;
            $this->nbEtage = $nbEtage;
        }

        public function getNom(){
            return $this->nom;
        }
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function getLongueur(){
            return $this->longueur;
        }
        public function setLongueur($longueur){
            $this->longueur = $longueur;
        }

        public function getLargeur(){
            return $this->largeur;
        }
        public function setLargeur($largeur){
            $this->largeur = $largeur;
        }

        public function getNbEtage(){
            return $this->nbEtage;
        }
        public function setNbEtage($lnbEtage){
            $this->nbEtage = $nbEtage;
        }

        public function surface(){
            $longueur = $this->getLongueur();
            $largeur = $this->getLargeur();
            return $this->getLongueur()*$this->getLargeur();
        }     

        public function surfaceTotal(){
            $longueur = $this->getLongueur();
            $largeur = $this->getLargeur();
            $nbEtage = $this->getNbEtage();
            return $this->getLongueur()*$this->getLargeur()*($this->getNbEtage()+1);
        }        
    }
?>