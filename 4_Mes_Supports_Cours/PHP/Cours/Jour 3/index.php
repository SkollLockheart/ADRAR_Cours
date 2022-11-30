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
        <fieldset>
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
                $req = $bdd->prepare("insert into articles (nom_article, contenu_article) values (:nom_article,:contenu_article)");
                $req->bindParam(2,$name_user,PDO::PARAM_STR);
                $req->bindParam(1,$login,PDO::PARAM_STR);
                $req->execute(array(
                    'nom_article' => $name,
                    'contenu_article' => $content
                ));
                echo "<p>Article créé.<p>";
            }catch(Exception $e){
                echo "<p>".$e."<p>";
            }
            $bdd=null;
            $req=null;
        }
    ?>
        <?php
            // $bdd = new PDO('mysql:host=localhost;dbname=articles','root','',
            // array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            // try{
            //     $req=$bdd->prepare('select nom_article, contenu_article from articles');
            //     $req->execute();
            //     $data = $req->fetchAll();
            //     foreach($data as $row){
            //         echo "<h1>".$row['nom_article']."</h1><p>".$row['contenu_article']."</p>";
            //     }
            // }catch(Exception $e){
            //     echo "<p>".$e."<p>";
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
            <label for="" class="titreLMP">Login</label>
            <br>
            <input type="text" name="login_user" class="champLMP">
            <br>
            <label for="" class="titreLMP">Mot de passe</label>
            <br>
            <input type="text" name="mdp_user" class="champLMP">
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
    </style>
    
</body>
</html>