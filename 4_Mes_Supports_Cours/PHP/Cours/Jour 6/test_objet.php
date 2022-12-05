<!-- EXERCICE 24 :
Créer un fichier test_objet.php qui va nous servir de fichier d’exécution,
Créer une nouvelle classe Maison maison.php qui va contenir les attributs suivants :
-nom, longueur, largeur.
Instancier une nouvelle maison dans le fichier test_objet.php avec les valeurs de votre choix (nom, longueur et
largeur),
-Créer une méthode surface qui calcule et affiche la superficie de la maison (longueur * largeur) dans la classe
Maison.
-Appeler la méthode surface et afficher sous la forme suivante le résultat :
"<p>la surface de nomMaison est égale à : x m2</p>".
Bonus
Ajouter un attribut nbrEtage à la classe Maison,
Modifier la méthode surface pour qu’elle prenne en compte le paramètre nbrEtage. -->

<h3> Exercice 24</h3>
<?php
    require('maison.php');
    $maison = new Maison('Villa',25,30,2);
    // echo $maison->getNom();
    // echo $maison->getLongueur();
    // echo $maison->getLargeur();
    echo "<p>La surface de ".$maison->getNom()." est égale à : ".$maison->surface()." m² par étage.</p>";
    echo "<h4>BONUS</h4>";
    echo "<p>La surface de ".$maison->getNom()." est égale à : ".$maison->surfaceTotal()." m² au total.</p>";
?>

<!-- EXERCICE 25

-Créer un fichier vehicule.php qui va contenir la classe,
-Dans ce fichier recréer la classe Vehicule comme dans le cours (attributs et méthodes),
-Créer un fichier test_objet.php au même niveau que vehicule.php,
-Appeler avec require() ou include() le fichier de la classe Vehicule,
-Instancier 2 nouveaux véhicules dans le fichier test_objet.php avec les paramètres suivants :
-Objet voiture (nomVehicule = « Mercedes CLK », nbrRoue = 4, vitesse 250),
-Objet moto (nomVehicule = « Honda CBR », nbrRoue = 2, vitesse = 280),
-Créer une fonction detect() qui détecte si le véhicule est une moto ou une voiture (la méthode retourne une string
moto ou voiture avec return) dans le fichier de classe vehicule.php,
-Exécuter la méthode detect() sur les 2 objets voiture et moto dans le fichier test_objet.php.
-Afficher le type de véhicule dans le fichier test_objet.php,
-Créer une méthode boost qui ajoute 50 à la vitesse d’un objet dans le fichier de classe vehicule.php,
-Appliquer la méthode boost a la voiture dans le fichier test_objet.php,
-Afficher la nouvelle vitesse de la voiture dans le fichier test_objet.php.
Bonus :
-Créer une méthode plusRapide() dans le fichier vehicule.php qui compare la vitesse des différents véhicules (moto
et voiture) et retourne le véhicule le plus rapide des 2 avec un return.
-Exécuter la méthode plusRapide() dans le fichier test_objet.php.
-Afficher le véhicule le plus rapide dans le fichier test_objet.php. -->

<h3> Exercice 25</h3>

<?php
    require('vehicule.php');

    $voiture = new Vehicule('Mercedes CLK',4,250);
    $moto = new Vehicule('Honda CBR',2,280);

    $voiture->detect();
    $moto->detect();

    echo "La ".$voiture->getNomVehicule()." est ".$voiture->detect().".<br>";
    echo "La ".$moto->getNomVehicule()." est ".$moto->detect().".<br>";

    $voiture->boost(50);
    echo "La vitesse de la ".$voiture->getNomVehicule()." est maintenant de ".$voiture->getVitesse().".<br>";

    $voiture->plusRapide($moto);
    echo "Le véhicule le plus rapide est la ".$voiture->plusRapide($moto).".";
?>

<!-- EXERCICE 26 - Projet Task :
Créer toutes les classes du projet task (user, task, category) et ajouter les dans le dossier model du projet.
Créer un fichier pour chacune de nos classes (user.php, task.php, category.php). -->

<h3> Exercice 26</h3>

<?php
    
?>