<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="bing">Gros Titre</h1>

    <?php
        // Afficher quelque chose
        echo "<p>Hello World</p>"; 
        // Déclarer une variable
        $phrase = 'Jojo le rigolo';
        $nombre =5;
        $bool=true;
        echo $phrase;
        // concatenation
        echo "<p>Afficher une variable : $phrase</p>";
        echo "<p>une autre façon : {$nombre}</p>";
        echo "<p>une derniere façon :".$bool."</p>";
        echo "<br>\$nombre = $nombre";
        // switch
        $value = 5;
        switch($value){
            case $value < 5 or $value > 5 :
                echo "<br>Diférrent de 5";
                // break si true arrête la fonction, différent de continue qui teste la suite de la fonction
                break;
            case 5 :
                echo "<br>Égale à 5";
                break;
                default :
                echo "<br>Je suis le défaut";
                break;
                
            };
        // boucle
        for ($i=0;$i<10;$i++){
            echo "Ceci est une boucle for en PHP<br>";
        }

    ?>
</body>
</html>