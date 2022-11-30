<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calulatrice :</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Calculatrice</legend>
            <p>Saisir un nombre :</p>
            <input type="number" name="nbr1" step="any">
            <p>Saisir un nombre :</p>
            <input type="number" name="nbr2" step="any">
            <p>Saisir un Opérateur (+,-,*,/) :</p>
            <input type="text" name="operateur">
            <p><input type="submit" value="Calculer"></p>
            <?php

                if(isset($_POST['nbr1']) AND $_POST['nbr1'] != "" AND isset($_POST['nbr2']) AND $_POST['nbr2'] != "" AND isset($_POST['operateur']) AND $_POST['operateur'] != ""){
                    $nbr1 = $_POST['nbr1'];
                    $nbr2 = $_POST['nbr2'];
                    $opr = $_POST['operateur'];
                    $total = 0;
                    switch($opr){
                        case '+' :
                            $total = $nbr1 + $nbr2;
                            echo " Le résultat est ".round($total,2).".";
                            break;
                        case '-' :
                            $total = $nbr1 - $nbr2;
                            echo " Le résultat est ".round($total,2).".";
                            break;
                        case '*' :
                            $total = $nbr1 * $nbr2;
                            echo " Le résultat est ".round($total,2).".";
                            break;
                        case $opr == '/' && $nbr2 != 0 :
                            $total = $nbr1 / $nbr2;
                            echo " Le résultat est ".round($total,2).".";
                            break;
                        case $opr == '/' && $nbr2 == 0 :
                            echo "Division par zéro impossible!";
                            break;
                    }
                } else {
                    echo "Veuillez remplir les champs.";
                }
            ?>
        </fieldset>
    </form>
   
</body>
</html>