<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <header>
        <p><a href="controler_utilisateur.php">Accueil</a></p>
        <p><a href="controler_compte.php">Compte</a></p>
        <p><a href="controler_deconnexion.php">Déconnexion</a></p>
    </header>
    <style>
        body{
            font-family:"Bahnschrift Condensed";
        }
        header{
            display:flex;
            justify-content:space-around;
            background-color: grey;
            border: 3px solid black;
        }
        a{
            text-decoration:none;
            color:black;
            background-color: white;
            border: 2px solid black;
            padding:2px;
        }
        #inscr_co{
            display:flex;
            justify-content:space-around;
            align-items:center;
            flex-wrap:wrap;
            flex-direction:row;
        }
        #message_inscription{
            text-align:center;
        }
        h3{
            text-align:center;
        }
    </style>

    <main>