<!--
    MON FICHIER VUE de mon architecture Model-Vue-Controler
    -> Contient TOUT mon HTML
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 5</title>
</head>
<body>
<h3>Exercice 23</h3>
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
    </fieldset>
</form>
</body>
</html>