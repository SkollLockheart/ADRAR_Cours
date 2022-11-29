<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        // Exercice 1 :
        // -Créer une variable de type int avec pour valeur 5,
        // -Afficher le contenu de la variable (utilisation de la fonction php echo),
        // -Afficher son type (utilisation de la fonction php gettype),
        // -Créer une variable de type String avec pour valeur votre prénom,
        // -Afficher le contenu de la variable (utilisation de la fonction php echo),
        // -Créer une variable de type booléen avec pour valeur false,
        // -Afficher son type (utilisation de la fonction php gettype).
        echo "<h3>Exercice 1</h3>";
        $int = 5;
        echo "$int ";
        echo "<br>";
        echo gettype($int);
        $string = "Sébastien";
        echo "<br>";
        echo "$string";
        echo "<br>";
        $bool = false;
        echo gettype($bool);
        echo "<br>";

        // Exercice 2 :
        // -Créer 2 variables $a et $b qui ont pour valeur 12 et 10,
        // -Stocker le résultat de l’addition de $a et $b dans une variable $total,
        // -Afficher le résultat (utilisez la fonction echo)
        echo "<h3>Exercice 2</h3>";
        $a = 12;
        $b = 10;
        $total = $a + $b;
        echo $total;
        echo "<br>";

        // Exercice 3 :
        // -Créer 2 variables $a et $b qui ont pour valeur 15 et 23,
        // -Afficher la valeur de chaque variable (utilisez la fonction echo).,
        // -Intervertissez les valeurs de $a et $b,
        // -Afficher la valeur de $a et $b (utilisez la fonction echo).
        echo "<h3>Exercice 3</h3>";
        $a = 15;
        $b = 23;
        echo "a = $a <br>";
        echo "b = $b <br>";
        echo "<br>J'intervertis a et b.<br><br>";
        $c = $a;
        $a = $b;
        $b = $c;
        echo "a = $a <br>";
        echo "b = $b <br>";

        // Exercice 4 :
        // -Ecrire une fonction qui prend en paramètre (le prix HT d’un article, le nombre d’articles et le taux de TVA), et qui retourn le prix total TTC correspondant.
        // -Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
        // -Afficher le résultat (utilisez la fonction echo).
        echo "<h3>Exercice 4</h3>";
        function calculeTVA($prixHT,$nbArticle,$tva){
            echo "Prix HT: $prixHT €<br>";
            echo "Nombre d'article: $nbArticle<br>";
            echo "TVA: $tva %<br>";
            $prixTTC = ($prixHT*$nbArticle)*(1+($tva/100));
            echo "Le prix total TTC est de: $prixTTC €";
            return $prixTTC;
        }
        calculeTVA(10,5,5.5);

        // Exercice 5 :
        // -Créer une fonction qui teste si un nombre est positif ou négatif (echo dans la page web).
        // Bonus : traiter le cas est égal à 0.
        echo "<h3>Exercice 5</h3>";
        function testnb($nombre){
            switch($nombre){
                case 0 :
                    echo "Le nombre $nombre est égal à 0.<br>";
                    break;
                case $nombre > 0 :
                    echo "Le nombre $nombre est un nombre positif.<br>";
                    break;
                case $nombre < 0 :
                    echo "Le nombre $nombre est un nombre négatif.<br>";
                    break;
            };
        };
        testnb(5);
        testnb(-5);
        testnb(0);

        // Exercice 6 :
        // -Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs.
        // -Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web).
        // -Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit (echo dans la page web).
        // -Créer une fonction qui prend en entrée 3 valeurs et retourne la moyenne (echo dans la page web).
        echo "<h3>Exercice 6</h3>";
        echo "1) ";
        function somme($val1, $val2, $val3){
            $somme = $val1 + $val2 + $val3;
            echo "La somme des valeurs: $val1, $val2 et $val3 est $somme.<br>";
            return $somme;
        };
        somme(10,5,15);
        echo "2) ";
        // function plusGrand($val1, $val2, $val3){
        //     switch($val1){
        //         case $val1 > $val2 && $val1 > $val3 :
        //             echo "$val1 est le nombre le plus grand!<br>";
        //             return $val1;
        //             break;
        //     };
        //     switch($val2){
        //         case $val2 > $val1 && $val2 > $val3 :
        //             echo "$val2 est le nombre le plus grand!<br>";
        //             return $val2;
        //             break;
        //     };
        //     switch($val3){
        //         case $val3 > $val2 && $val3 > $val1 :
        //             echo "$val3 est le nombre le plus grand!<br>";
        //             return $val3;
        //             break;
        //     };
        // }
        function plusGrandSwitch($val1, $val2, $val3){
            switch($val1){
                case $val1 > $val2 && $val1 < $val3 :
                    echo "$val1 est le nombre le plus grand!<br>";
                    break;
                case $val1 > $val2 && $val2 < $val3 :
                    echo "$val2 est le nombre le plus grand!<br>";
                    break;  
                default :
                    echo "$val3 est le nombre le plus grand!<br>";
                    break;
            }
        }

        function plusGrand($val1, $val2, $val3){
            if ($val1 > $val2){
                if($val1> $val3){
                    echo "$val1 est le nombre le plus grand!<br>";
                }else {
                    echo "$val3 est le nombre le plus grand!<br>";
                }
            } else {
                if($va2 > $val3){
                    echo "$val2 est le nombre le plus grand!<br>";
                }else {
                    echo "$val3 est le nombre le plus grand!<br>";
                }
            }
        }

        plusGrand(10,5,15);

        echo "3) ";
        // function plusPetit($val1, $val2, $val3){
        //     switch($val1){
        //         case $val1 < $val2 && $val1 < $val3 :
        //             echo "$val1 est le nombre le plus petit!<br>";
        //             return $val1;
        //             break;
        //     };
        //     switch($val2){
        //         case $val2 < $val1 && $val2 < $val3 :
        //             echo "$val2 est le nombre le plus petit!<br>";
        //             return $val2;
        //             break;
        //     };
        //     switch($val3){
        //         case $val3 < $val2 && $val3 < $val1 :
        //             echo "$val3 est le nombre le plus petit!<br>";
        //             return $val3;
        //             break;
        //     };
        // }

        function plusPetitSwitch($val1, $val2, $val3){
            switch($val1){
                case $val1 < $val2 && $val1 > $val3 :
                    echo "$val1 est le nombre le plus grand!<br>";
                    break;
                case $val1 < $val2 && $val2 > $val3 :
                    echo "$val2 est le nombre le plus grand!<br>";
                    break;  
                default :
                    echo "$val3 est le nombre le plus grand!<br>";
                    break;
            }
        }

        function plusPetit($val1, $val2, $val3){
            if ($val1 < $val2){
                if($val1 < $val3){
                    echo "$val1 est le nombre le plus grand!<br>";
                }else {
                    echo "$val3 est le nombre le plus grand!<br>";
                }
            } else {
                if($val2 < $val3){
                    echo "$val2 est le nombre le plus grand!<br>";
                }else {
                    echo "$val3 est le nombre le plus grand!<br>";
                }
            }
        }

        plusPetit(10,5,15);

        echo "4) ";
        function moyenne($val1, $val2, $val3){
            $moyenne = ($val1 + $val2 + $val3)/3;
            echo "La moyenne de $val1, $val2 et $val3 est $moyenne";
            return $moyenne;
        }
        moyenne(10,5,15);

        // Exercice 7:
        // -Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans la page web) :
        // • "Poussin" de 6 à 7 ans
        // • "Pupille" de 8 à 9 ans
        // • "Minime" de 10 à 11 ans
        // • "Cadet" après 12 ans
        // Bonus : Refaire l’exercice en utilisant le switch case.
        echo "<h3>Exercice 7</h3>";
        function classement($age){
            switch($age){
                case $age < 6 :
                    echo "À l'âge de $age ans.<br>Vous n'êtes rien !<br><br>";
                    break;
                case $age >= 6 && $age <= 7 :
                    echo "À l'âge de $age ans.<br>Vous êtes un Poussin !<br><br>";
                    break;
                case $age >= 8 && $age <= 9 :
                    echo "À l'âge de $age ans.<br>Vous êtes un Pupille !<br><br>";
                    break;
                case $age >= 10 && $age <= 11 : 
                    echo "À l'âge de $age ans.<br>Vous êtes un Minime !<br><br>";
                    break;
                case $age >= 12 :
                    echo "À l'âge de $age ans.<br>Vous êtes un Cadet !<br><br>";
            };
        };
        classement(3);
        classement(6);
        classement(9);
        classement(10);
        classement(15);

        //     Exercice 8 :
        // Créer un script qui affiche les nombres de 1 -> 5 (méthode echo).
        echo "<h3>Exercice 8</h3>";
        for ($i=0; $i<5; $i++){
            echo ($i+1);
            echo "<br>";
        }

        // Exercice 9 :
        // Ecrire une fonction qui prend un nombre en paramètre (variable $nbr), et qui ensuite affiche les dix nombres
        // suivants. Par exemple, si la valeur de nbr équivaut à : 17, la fonction affichera les nombres de 18 à 27 (méthode echo).
        echo "<h3>Exercice 9</h3>";
        function compte($nbr){
            for($i=0; $i<10; $i++){
                $nbr++;
                echo $nbr;
                echo "<br>";
            }
        }
        compte(17);

        // Exercice 10 :
        // -Créer une fonction qui affiche la valeur la plus grande du tableau.
        // $tab = array(10, 25,6,33, 58,1,49,110);
        // nb : (fonction aura besoin d'un tableau en paramètre).
        echo "<h3>Exercice 10</h3>";
        $tab = array(10, 25,6,33, 58,1,49,110);
        // $arrayLast = count($tab)-1;
        // sort($tab);
        // echo $tab[$arrayLast];

        // Correction
        function plusGrandSort($tableau){
            rsort($tableau);
            echo($tableau[0]);
        };
        plusGrandSort($tab);

        

        // Exercice 11 :
        // -Créer une fonction qui affiche la valeur la plus petite du tableau.
        // $tab = array(10, 25,6,33, 58,1,49,110);
        // nb : (fonction aura besoin d'un tableau en paramètre).
        echo "<h3>Exercice 11</h3>";
        function plusPetitSort($tableau){
            sort($tableau);
            echo($tableau[0]);
        };
        plusPetitSort($tab);

        // Exercice 12 :
        // -Créer une fonction qui affiche la moyenne du tableau.
        // (nb : il est utile d'utiliser la fonction sizeof()  ou count()  )
        echo "<h3>Exercice 12</h3>";
        function arrayMoyenne($tableau){
            $longueur = count($tableau);
            $somme = 0;
            foreach($tableau as $value){
            $somme = $somme + $value;
            }
            echo $somme/$longueur;
        }
        arrayMoyenne($tab);

        ?>
    </body>
</html>