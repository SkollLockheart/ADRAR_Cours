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
        <p><a href="index.php">Index</a></p>
        <p><a href="page1.php">Page 1</a></p>
        <p><a href="deconnexion.php">Déconnexion</a></p>
    </header>

    <main>
        <h1>Page 2</h1>
    </main>
    
</body>
</html>

<?php
    session_start();

    $_SESSION['page2']="";

    if(isset($_SESSION['page1'])){
        echo "<p>".$_SESSION['prenom_user']." a visité la page 1.</p>";
    }

    if(isset($_SESSION['page2'])){
        echo "<p>".$_SESSION['prenom_user']." a visité la page 2.</p>";
    }
?>