<?php
    require('Demo_classe_Objet.php');

    $voiture = new Vehicule('Peugeot,4,180');
    // $voiture->nomVehicule = "Toyota";
    // echo $voiture->nomVehicule;
    echo $voiture->getNomVehicule()."<br>";

    //Pour afficher l'ensemble d'un Objet, echo ne marche pas. On utilise le var_dump 
    var_dump($voiture);

    $voiture->setNomVehicule('Toyota');
    echo $voiture->getNomVehicule();
?>