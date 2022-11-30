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
    <!-- Connexion BDD -->
    <?php
    $bdd = new PDO('mysql:host=Localhost;dbname=nom_de_la_bdd', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //Exécution de la requête SQL avec un try catch pour la gestion des exceptions (messages d’erreurs)
    try
        {
            //reqête pour stocker le contenu de toute la table le contenu est stocké dans la variable $data, $req stocke la requete  SQL.
            $req = $bdd->query('SELECT * FROM utilisateur');
            //boucle pour parcourir et afficher le contenu de chaque ligne de la table
            while ($data = $req-fetch())
            {
                //affiche les information d'une colonne de la bdd par son nom d'attribut.
                echo '<p>'.$data['nom_attribut'].'<p>';
            }
        }
    catch(Exception $e)
        {
            //affichage d'une exception en cas d'erreur
            die('Erreur : '.$e->getMessage());
        }
    
        //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter 
            $req = $bdd->prepare('SELECT * FROM utilisateur where nom_utilisateur = :nom_utilisateur'); 
        //Exécution de la requête SQL création à l’aide d’un tableau qui va contenir le ou les paramètres à affecter à la requête SQL
            $req->execute(array(
                'nom_utilisateur' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $nom_utilisateur),
            )); 
        //boucle pour parcourir et afficher le contenu de chaque ligne de la table 
            while ($donnees = $req->fetch()) 
            { 
        //affichage des données d’une colonne du résultat de la requête par son non d’attribut (nom champ bdd)
            echo '<p>'.$donnees['nom_attribut'].'</p>'; 
            } 
        
        //Vérsion la plus sécurisé avec bindParam
        try{
            $req = $bdd->prepare("insert into users (login_user,name_user) values (:login,:name_user)");
            $req->bindParam(1,$login,PDO::PARAM_STR);
            $req->bindParam(2,$name_user,PDO::PARAM_STR);
            $req->execute();
            echo "<p>User enregistré en BDD<p>";
        }catch(Exception $error){
            var_dump("<p>".$error."<p>");
        };
        $bdd=null;
        $req=null;

    ?>
</body>
</html>