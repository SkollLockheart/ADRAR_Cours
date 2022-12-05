<?php
    class Vehicule
    {
        private $nomVehicule;
        private $nbRoue;
        private $vitesse;

        public function __construct($nomVehicule,$nbRoue,$vitesse){
            $this->nomVehicule = $nomVehicule;
            $this->nbRoue = $nbRoue;
            $this->vitesse = $vitesse;
        }

        public function getNomVehicule(){
            return $this->nomVehicule;
        }
        public function setNomVehicule($nomVehicule){
            $this->nomVehicule = $nomVehicule;
        }

        public function getNbRoue(){
            return $this->nbRoue;
        }
        public function setNbRoue($nbRoue){
            $this->nbRoue = $nbRoue;
        }

        public function getVitesse(){
            return $this->vitesse;
        }
        public function setVitesse($vitesse){
            $this->vitesse = $vitesse;
        }

        public function detect(){
            $nomVehicule = $this->getNomVehicule();
            $nbRoue = $this->getNbRoue();
            switch($nbRoue){
                case 2 :
                    return "une moto";
                    break;
                default :
                    return "une voiture";
            }
        }

        public function boost($ajoutVitesse){
            $this->setVitesse($this->getVitesse()+$ajoutVitesse);
        }

        public function plusRapide($vehicule){
            switch($vehicule->getVitesse()){
                case $vehicule->getVitesse() > $this->getVitesse() :
                    return $vehicule->getNomVehicule();
                    break;
                default :
                    return $this->getNomVehicule();
            }
        }
    }
?>