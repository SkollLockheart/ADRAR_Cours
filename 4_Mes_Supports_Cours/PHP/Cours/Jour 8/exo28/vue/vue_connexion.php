<form action="" method="POST">
<fieldset>
        <legend><h2>CONNEXION</h2></legend>
        <div>
            <label for="login_utilisateur_connexion">Identifiant</label>
            <input type="text" name="login_utilisateur_connexion" placeholder="Choisissez votre identifiant">
        </div>
        <br>
        <div>
            <label for="mdp_utilisateur_connexion">Mot de passe</label>
            <input type="text" name="mdp_utilisateur_connexion" placeholder="Choisissez votre identifiant">
        </div>
        <br>
        <input type="submit" value="Connexion">
    </fieldset>

</form>
<style>
    form{
        display:flex;
    }
    div{
        display:flex;
        flex-direction:column;
    }
</style>