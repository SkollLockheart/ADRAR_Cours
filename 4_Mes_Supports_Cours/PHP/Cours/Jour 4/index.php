<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Exercie 20</h3>
    <!-- Exercice 20 :
    Réalisez le TP file import (importer des images->Local). -->
    <form action="#" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend><h4>Importer des images en local</h4></legend>
            <input type="file" name="file">
            <br>
            <br>
            <input type="submit" value="Importer">

            <?php
                if(isset($_FILES['file'])){
                    $tmpName = $_FILES['file']['tmp_name'];
                    $name = $_FILES['file']['name'];
                    $fichier = move_uploaded_file($tmpName, "./import/$name");
                    echo '<p>Fichier importé.</p>';
                }
            ?>
        </fieldset>
    </form>
    <h3>Exercie 21</h3>
    <!-- Exercice 21 :
    1) Créer une base de donné Compte, puis ses tables selon le MLD suivant
    2) Dans un fichier php, créer le HTML d'un formulaire pour enregistrer des Users, et importer des images 
    3) Créer le script php permettant d'enregistrer en BDD les Users avec leur image
    4) Ajouter un paragraphe qui affiche que l'enregistrement s'est bien passé, ou bien un message d'erreur-->
    <form action="#" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend><h4>Création user avec avatar</h4></legend>
            <label for="login_user">Login</label>
            <input type="text" name="login_user">
            <label for="mdp_user">Mot de passe</label>
            <input type="text" name="mdp_user">
            <br>
            <br>
            <input type="file" name="file">
            <br>
            <br>
            <input type="submit" value="Importer">

            <?php
                if(isset($_POST['login_user']) AND $_POST['login_user'] != "" AND isset($_POST['mdp_user']) AND $_POST['mdp_user'] != "" AND isset($_FILES['file'])){
                    $login_user = $_POST['login_user'];
                    $mdp_user = $_POST['mdp_user'];
                    $tmpName = $_FILES['file']['tmp_name'];
                    $name = $_FILES['file']['name'];
        
                    $bdd = new PDO('mysql:host=localhost;dbname=exo_import','root','',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    $fichier = move_uploaded_file($tmpName, "./import/$name");
                    $url_img = "./import/$name";

                    try{
                        $ext = new SplFileInfo($name);
                        $tabExt = $ext->getExtension();
                        if($tabExt == 'jpg' OR $tabExt == 'png' OR $tabExt == 'gif'){
                                $req = $bdd -> prepare("insert into users (login_user, mdp_user) values (?,?)");
                                $req -> bindParam(1,$login_user,PDO::PARAM_STR);
                                $req -> bindParam(2,$mdp_user,PDO::PARAM_STR);
                                $req -> execute();
                                $req = $bdd -> prepare("select id_user from users where login_user in (?)");
                                $req -> bindParam(1,$login_user,PDO::PARAM_STR);
                                $req -> execute();
                                $data = $req->fetchAll();
                                foreach($data as $id_user);
                                $req = $bdd -> prepare("insert into image (url_img, id_user) values (?,?)");
                                $req -> bindParam(1,$url_img,PDO::PARAM_STR);
                                $req -> bindParam(2,$id_user['id_user'],PDO::PARAM_INT);
                                $req -> execute();
                                echo "<p>Compte créé!</p>";
                        } else {
                            echo 'ERROR: Type de fichier invalide.';
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
    <h3>BONUS</h3>
    SELECT article.id_article,titre_article,contenu_article,date_article,id_util,nom_cat FROM article 
    INNER JOIN categorie,posseder
    WHERE categorie.id_cat=posseder.id_cat
    AND article.id_article=posseder.id_article;
    <style>
        fieldset{
            width: 50%;
        }
    </style>

</body>
</html>