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
        <h3>Exercice 22</h3>
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
        <form action="#" method="POST">
            <fieldset id="exo19">
                <legend><h4>Suppression de compte</h4></legend>
                <br>
                <?php
                include('model_task_affiche.php');
                ?>
                <br>
                <input type="submit" id="suppression" value="Supprimer">
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