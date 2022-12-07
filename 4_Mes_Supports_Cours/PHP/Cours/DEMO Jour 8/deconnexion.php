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
        <p><a href="page2.php">Page 2</a></p>
    </header>
    
    <main>
        <h1>Déconnexion</h1>
    </main>

</body>
</html>

<?php
    session_start();

    session_destroy();
?>