<?php
    include('model_vehicule.php');
    include('model_tank.php');
    
    $voiture = new Vehicule('Megane','Rouge');

    // echo $voiture->getNom();

    $tank = new Tank('Leclerc','Brun');

    echo $tank->getNom();

?>