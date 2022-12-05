<?php
    class Vehicule
    {
        //Attribits:
        private $nomVehicule;
        private $nbRoue;
        private $vitesse;

        //Constructeur
        function __construct($nomVehicule,$nbRoue,$vitesse){
            $this->nomVehicule = $nomVehicule;
            $this->nbRoue = $nbRoue;
            $this->vetesse = $vitesse;
        }

        //Méthodes:
        //GETTER et SETTER
        public function getNomVehicule(){
            return $this->nomVehicule;
        }
        public function setNomVehicule($nombre){
            $this->nomVehicule = $nom;
        }

        public function getNbRoue(){
            return $this->nbRoue;
        }
        public function setNbRoue($nombre){
            $this->nbRoue = $nom;
        }

        public function getVitesse(){
            return $this->vitesse;
        }
        public function setVitesse($vitesse){
            $this->nbRoue = $vitesse;
        }
    }
?>