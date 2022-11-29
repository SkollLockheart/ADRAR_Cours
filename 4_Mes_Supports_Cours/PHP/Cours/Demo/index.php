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
    <form action="#" method="post">
        <input type="text" name="prenom">
        <input type="number" name="age">
        <input type="submit">
    </form>

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
        // Super Global
        //Vérification si champ vide ou non 
        // true = pas null | false = null
            // 1- Vérifier si la variable existe et n'est pas null
            // echo isset($_POST["prenom"]);
            // 2- Vérifier si la variable n'est pas vide
            // $_POST["prenom"] != "";

        // On combine le tout pour avoir notre condition final
        echo "Vérification de tout les champs<br>";
        if(isset($_POST["prenom"]) AND $_POST["prenom"] != "" AND isset($_POST["age"]) AND $_POST["age"] != ""){
            echo "<br>Formulaire Valide";
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];
            echo "<br>$prenom a $age ans.";
        }else {
            echo "<br> ERROR";  
        };
        echo "Vérification Champ par Champ<br>";
        if(isset($_POST["prenom"]) AND $_POST["prenom"] != ""){
            echo "<br>Nom valide";
            $prenom = $_POST["prenom"];
        }else {
            echo "<br> Il manque le nom";  
        };
        if(isset($_POST["age"]) AND $_POST["age"] != ""){
            echo "<br>Âge valide";
            $prenom = $_POST["age"];
        }else {
            echo "<br> Il manque l'âge";  
        };
    ?>
        <!-- Checkbox -->
    <form action="" method="post">
        <h2>Quelle est votre classe de perso</h2>
        <label name="box[]">Guerrier</label>
        <input type="checkbox" name="box[]" value="Guerrier">
        <label name="box[]">Voleur</label>
        <input type="checkbox" name="box[]" value="voleur">
        <label name="box[]">Mage</label>
        <input type="checkbox" name="box[]" value="Mage">
        <input type="submit">
    </form>

    <?php
        if(isset($_POST["box"]) and $_POST["box"] != ""){
            $tab = $_POST["box"];
            foreach($tab as $value){ 
                echo"<p>Vous Ãªtes : $value</p>";
            }
        }
    ?>
</body>
</html>