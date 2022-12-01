<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 3</title>
</head>
<body>
    <h3>Exercice 18</h3>
    <!-- Exercice 18 :
    a) Créer une base de données MYSQL avec les informations suivantes :
    -Nom de la bdd : « articles »,
    -une table nommée article qui va posséder les champs suivants :
    id_article (clé primaire),
    nom_article de type varchar(50),
    contenu_article de type varchar (255),
    b) Créer une page php qui va contenir un formulaire html avec comme méthode POST (balise form)
    -A l’intérieur du formulaire rajouter les champs suivants :
    Un champ input avec comme attribut html name = «nom_article »,
    Un champ input avec comme attribut html name = «contenu_article »,
    Un champ input de type submit avec comme attribut html value = «Ajouter»
    c) Ajouter le code php suivant :
    -Créer 2 variables $name, $content
    -Importer le contenu des 2 super globales $_POST[‘nom_article’], $_POST[‘contenu_article’] et tester les avec la
    méthode isset() dans les variables créés précédemment ($name et $content),
    -Ajouter le code de connexion à la base de données en vous inspirant des exemples vus dans ce chapitre,
    -Ajouter une requête simple qui va insérer le contenu des 2 champs dans un nouvel enregistrement (requête SQL
    insert),
    d) Bonus :
    -Utiliser une requête SQL préparée à la place de la requête simple.
    -Afficher dans un paragraphe le nom et le contenu de l’article ajouté en bdd en dessous du formulaire. -->
    <form action="#" method="POST">
        <fieldset id="creaArticle">
            <Legend><h4>Création d'article</h4></Legend>
            <label for="nom_article">Nom de l'article</label>
            <br>
            <input type="text" name="nom_article">
            <br>
            <br>
            <label for="contenu_article">Contenu de l'article</label>
            <br>
            <textarea type="text" name="contenu_article" cols="30" rows="10" placeholder="Écrivez ici..."></textarea>
            <br>
            <input type="submit" value="Ajoutez">
        </fieldset>
    </form>
    <?php
        if(isset($_POST['nom_article']) AND $_POST['nom_article'] != "" AND isset($_POST['contenu_article']) AND $_POST['contenu_article'] != ""){
            $name = $_POST['nom_article'];
            $content = $_POST['contenu_article'];

            $bdd = new PDO('mysql:host=localhost;dbname=articles','root','',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            try{
                $req = $bdd->prepare("insert into articles (nom_article, contenu_article) values (?,?)");
                $req->bindParam(2,$contenu_article,PDO::PARAM_STR);
                $req->bindParam(1,$nom_article,PDO::PARAM_STR);
                $req->execute();
                echo "<p>Article créé.</p>";
            }catch(Exception $e){
                echo "<p>".$e."</p>";
            }
            $bdd=null;
            $req=null;
        }
    ?>
    <style>
        #creaArticle{
            width:50%;
        }
    </style>
    <?php
        // $bdd = new PDO('mysql:host=localhost;dbname=articles','root','',
        // array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        // try{
            // $req=$bdd->prepare('select nom_article, contenu_article from articles');
            // $req->execute();
            // $data = $req->fetchAll();
            // foreach($data as $row){
            //     echo "<h1>".$row['nom_article']."</h1><p>".$row['contenu_article']."</p>";
            // }
        // }catch(Exception $e){
        //     echo "<p>".$e."</p>";
        // }
        // $bdd=null;
        // $req=null;
    ?>
    <h3>Exercice 18</h3>
    <!-- Exercice 19-  PROJET TASK Partie 1 
    a) Créer une base de données MYSQL depuis le MLD ci-dessous :
    -Nom de la BDD : «task»,
    b) Créer une page php qui va contenir un formulaire html avec comme méthode POST (balise form) cette page va
    nous permettre de créer nos comptes utilisateurs et les sauvegarder dans la base de données.
    -A l’intérieur du formulaire ajouter les champs suivants :
    Un champ input avec comme attribut html name = «name_user»,
    Un champ input avec comme attribut html name = «first_name_user»,
    Un champ input avec comme attribut html name = «login_user»,
    Un champ input avec comme attribut html name = «mdp_user»,
    Un champ input de type submit avec comme attribut html value = « Ajouter »
    c) Ajouter le code php suivant :
    -Créer 4 variables $name_user, $first_name_user, $login_user, $mdp_user,
    -Importer le contenu des super globales $_POST[‘name_user’], $_POST[‘first_name_user’], $_POST[‘login_user’],
    $_POST[‘mdp_user’], et tester les avec la méthode isset() (dans la condition if) dans les variables créées
    précédemment ($name_user, $first_name_user, $login_user, $mdp_user),
    -Ajouter le code de connexion à la base de données en vous inspirant des exemples vus dans ce chapitre,
    -Ajouter une requête simple qui va insérer le contenu des 4 champs dans un nouvel enregistrement (requête SQL
    insert),
    -Afficher après l’insertion en base de données les informations que vous avez saisies (nom, prenom, login, mot de
    passe).
    d)Bonus :
    -Afficher en bas de la page la liste des comptes utilisateurs créés avec une requête SQL select,
    -Utiliser une requête SQL préparée. -->
    <form action="#" method="POST">
        <fieldset id="exo18">
            <legend><h4>Création de compte</h4></legend>
            <div id="nom">
                <div>
                    <label for="name_user">Nom</label>
                    <br>
                    <input type="text" name="name_user">
                </div>
                <div>
                    <label for="first_name_user">Prénom</label>
                    <br>
                    <input type="text" name="first_name_user">
                </div>
            </div>
            <br>
            <label for="login_user" class="titreLMP">Login</label>
            <br>
            <input type="text" name="login_user" class="champLMP">
            <br>
            <label for="mdp_user" class="titreLMP">Mot de passe</label>
            <br>
            <input type="text" name="mdp_user" class="champLMP">
            <br>
            <input id="bouton" type="submit" value="Ajouter">
        </fieldset>
    </form>
    <style>
        #nom{
            display : flex;
        }
        div{
            margin-left : 30px;
        }
        #exo18{
            display : flex;
            flex-direction : column;
            width : 50%;
        }
        .titreLMP{
            text-align : center;
        }
        .champLMP{
            width : 50%;
            align-self : center;
        }
        #bouton{
            width : 30%;
            align-self : center;
            background-color : green;
            color : white;
        }
        #validation{
            font-size: 35px;
            text-align: center;
            width: 50%;
        }
    </style>
    <?php
        if(isset($_POST['name_user']) AND $_POST['name_user'] != "" AND isset($_POST['first_name_user']) AND $_POST['first_name_user'] != "" AND isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != ""){
            $name_user = $_POST['name_user'];
            $first_name_user = $_POST['first_name_user'];
            $login_user = $_POST['login_user'];
            $mdp_user = $_POST['mdp_user'];

            $bdd = new PDO('mysql:host=localhost;dbname=projet_task','root','',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            try{
                $req = $bdd -> prepare("insert into user (name_user, first_name_user, login_user, mdp_user) values (?,?,?,?)");
                $req -> bindParam(1,$name_user,PDO::PARAM_STR);
                $req -> bindParam(2,$first_name_user,PDO::PARAM_STR);
                $req -> bindParam(3,$login_user,PDO::PARAM_STR);
                $req -> bindParam(4,$mdp_user,PDO::PARAM_STR);
                $req -> execute();
                echo "<p id=\"validation\">Compte créé!</p>";
                echo "<p> $name_user $first_name_user, Login: $login_user Mot de passe: $mdp_user </p>";
            }catch(Exception $e){
                echo "<p>".$e."</p>";
            }
            $bdd=null;
            $req=null;
        }
    ?>
    <?php
        $bdd = new PDO('mysql:host=localhost;dbname=projet_task','root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        try{
            $req=$bdd->prepare('select name_user, first_name_user, login_user, mdp_user from user');
            $req->execute();
            $data = $req->fetchAll();
            foreach($data as $row){
                echo "<p>Nom: ".$row['name_user'].", Prenom: ".$row['first_name_user'].", Login: ".$row['login_user'].", MDP: ".$row['mdp_user']."</p>";
            }
        }catch(Exception $e){
            echo "<p>".$e."</p>";  
        }
        $bdd=null;
        $req=null;
    ?>
    <h3>Exercice 19</h3>
    <!-- BONUS EXERCICE 19 :
    - Afficher la liste des utilisateurs dans un formulaire. Chaque utilisateur aura une checkbox à côté de lui.
    - Le Formulaire contiendra un input Submit qui aura pour Value = "Supprimer utilisateur"
    - Ecrire une requête qui permet de supprimer de la bdd les utilisateurs cochés -->
    <form action="#" method="POST">
    <fieldset id="exo19">
            <legend><h4>Suppression de compte</h4></legend>
        <?php
            $bdd = new PDO('mysql:host=localhost;dbname=projet_task','root','',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            try{
                $req=$bdd->prepare('select login_user, id_user from user');
                $req->execute();
                $data = $req->fetchAll();
                foreach($data as $row){
                    echo "<input type=\"checkbox\" name=\"account[]\" value=\"".$row['id_user']."\">
                    <label for=\"".$row['login_user']."\">".$row['login_user']."</label><br>";
                }
            }catch(Exception $e){
                echo "<p>".$e."</p>";  
            }
            $bdd=null;
            $req=null;
        ?>
        <br>
        <input type="submit" id="suppression" value="Supprimer">
        <?php
            if(isset($_POST['account'])){
                $bdd = new PDO('mysql:host=localhost;dbname=projet_task','root','',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $account = $_POST['account'];
                try{
                    foreach($account as $value){
                        $req=$bdd->prepare('delete from user where id_user in (?)');
                        $req -> bindParam(1,$value,PDO::PARAM_INT);
                        $req->execute();
                        echo "Compte supprimé!";
                    }
                }catch(Exception $e){
                    echo "<p>".$e."</p>";  
                }
                $bdd=null;
                $req=null;
            }

        ?>
        </fieldset>
    </form>
    <style>
        #exo19{
            width: 50%;
        }
        #suppression{
            background-color: red;
            color: white;
        }
    </style>
</body>
</html>