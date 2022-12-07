<form action="" method="POST">
    <fieldset>
        <legend><h2>INSCRIPTION</h2></legend>
        <div>
            <label for="login_utilisateur_inscription">Identifiant</label>
            <input type="text" name="login_utilisateur_inscription" placeholder="Choisissez votre identifiant">
        </div>
        <br>
        <div>
            <label for="mdp_utilisateur_inscription">Mot de passe</label>
            <input type="text" name="mdp_utilisateur_inscription" placeholder="Choisissez votre identifiant">
        </div>
        <br>
        <input type="submit" value="Inscription">
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