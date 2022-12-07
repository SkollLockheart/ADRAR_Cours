<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <p><a href="page1.php">Page 1</a></p>
        <p><a href="page2.php">Page 2</a></p>
        <p><a href="deconnexion.php">Page déconexion</a></p>
    </header>
    
    <main>
        <h1>Index</h1>
        <form action="" method="POST">
            <fieldset>
                <legend>Identificarion</legend>
                <label for="prenom">Entrez votre prénom :</label>
                <input type="text" name="prenom">
                <br>
                <input type="submit">
            </fieldset>
        </form>
    </main>

</body>
</html>

<?php
    session_start();



    if(isset($_POST['prenom']) AND $_POST['prenom']!=''){
        $_SESSION['prenom_user'] = $_POST['prenom'];
    }


    if(!isset($_SESSION['prenom_user'])){
        $_SESSION['prenom_user']="Invité";
        echo "<p>Personne n'est connecté</p>";
    }

    if(isset($_SESSION['page1'])){
        echo "<p>".$_SESSION['prenom_user']." a visité la page 1.</p>";
    }

    if(isset($_SESSION['page2'])){
        echo "<p>".$_SESSION['prenom_user']." a visité la page 2.</p>";
    }
?>