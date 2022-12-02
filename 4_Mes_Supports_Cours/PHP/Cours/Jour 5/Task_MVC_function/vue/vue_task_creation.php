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