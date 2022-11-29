<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>JOUR 1</h1>
        <?php
        // Exercice 13 :
        // -Créer une page de formulaire dans laquelle on aura 2 champs de formulaire de type nombre.
        // -Afficher dans cette même page la somme des 2 champs avec un affichage du style :
        // La somme est égale à : valeur.
        echo "<h3>Exercice 13</h3>";
        ?>
        <form action="#" method="POST">
            <fieldset>
            <legend><h4>Addition</h4></legend>
            <input type="number" name="nb1">
            ➕
            <input type="number" name="nb2">
            <input type="submit">
            <?php
            if(isset($_POST["nb1"]) AND $_POST["nb1"] != "" AND isset($_POST["nb2"]) AND $_POST["nb2"] != ""){
                $nb1 = $_POST["nb1"];
                $nb2 = $_POST["nb2"];
                $somme = $nb1 + $nb2;
                echo "<br><br>La somme est égale à : $somme.";
            }else {
                echo "<br><br>Champ non complété!";  
            };
            ?>
            </fieldset>
        </form>

        <?php
        // Exercice 14 :
        // -Créer une page de formulaire dans laquelle on aura 3 champs de formulaire de type nombre :
        // 1 champ de formulaire qui demande un prix HT d’un article,
        // 1 champ de formulaire qui demande le nombre d’article,
        // 1 champ de formulaire qui demande le taux de TVA,
        // -Afficher dans cette même page le prix TTC (prix HTtaux TVAquantité) avec un affichage du style :
        // Le prix TTC est égal à : valeur €. (utilisez le mode post).
        echo "<h3>Exercice 14</h3>";
        ?>
        <form action="#" method="POST">
            <fieldset>
                <legend><h4>Calcule TVA</h4></legend>
                <label for="#">Prix HT</label>
                <br>
                <input type="number" name="prixHT">
                <br>
                <br>
                <label for="#">Nombre d'article</label>
                <br>
                <input type="number" name="nbArticle">
                <br>
                <br>
                <label for="#">TVA</label>
                <br>
                <input type="number" step="any" name="TVA">
                <br>
                <br>
                <input type="submit">

            <?php
                if(isset($_POST['prixHT']) AND $_POST['prixHT'] != "" AND isset($_POST['nbArticle']) AND $_POST['nbArticle'] != "" AND isset($_POST['TVA']) AND $_POST['TVA'] != ""){
                    $prix = $_POST['prixHT'];
                    $nb = $_POST['nbArticle'];
                    $tva = $_POST['TVA']/100;
                    $sommeArt = $prix*$nb;
                    $total = $sommeArt * (1+$tva);
                    echo "<br><br>Le total TTC est de $total.";
                }else{
                    echo "<br><br>Champ non complété!";  
                }
            ?>
            </fieldset>
        </form>
        <?php
        // Exercice 15 :
        // Afficher le nom, et le genre sélectionné dans la page. (méthode post)
        // Base HTML : 
        // nb : utilisation d'un switch case pour faciliter le test du genre.
        echo "<h3>Exercice 15</h3>";
        ?>
        <form action="#" method="post">
            <fieldset>
                <legend><h4>Identification</h4></legend>
                <p>Saisir son nom :</p>
                <input type="text" name="nom">
                <p>Saisir son genre :</p>
                <select name="genre" >
                    <option value="1">
                        Femme
                    </option>
                    <option value="2">
                        Homme
                    </option>
                    <option value="3">
                        Autre
                    </option>   
                </select>
                <p><input type="submit" value="Afficher"></p>
                <?php
                if(isset($_POST['nom']) AND $_POST['nom'] != "" AND isset($_POST['genre']) AND $_POST['genre'] != ""){
                    $nom = $_POST['nom'];
                    $genre = $_POST['genre'];
                    switch($genre){
                        case 1 :
                            $genre = 'femme';
                            break;
                        case 2 :
                            $genre = 'homme';
                            break;
                        case 3 :
                            $genre = 'autre';
                            break;
                    }
                    echo "$nom se défini en tant que $genre.";
                }else {
                    echo "<br>Champ nom vide!";
                }
                ?>
            </fieldset>
        </form>
        <?php
        // Exercice 16 :
        // - Reprenez l'Exercice 15.
        // - Rajoutez des checkbox Compétences :
        //         + Leader
        //         + Diplomate
        //         + Commercial
        //         + Technicien
        //         + Comptable
        // Afficher le nom, le genre, et la liste des compétences
        echo "<h3>Exercice 16</h3>";
        ?>
        <form action="#" method="post">
            <fieldset>
                <legend><h4>Identification</h4></legend>
                <p>Saisir son nom :</p>
                <input type="text" name="nom">
                <p>Saisir son genre :</p>
                <select name="genre" >
                    <option value="1">
                        Femme
                    </option>
                    <option value="2">
                        Homme
                    </option>
                    <option value="3">
                        Autre
                    </option>   
                </select>
                <br>
                <br>
                <label for="#"><strong>Choix de compétences :</strong></label>
                <label name="box[]">Leader</label>
                <input type="checkbox" name="box[]" value="Leader">
                <label name="box[]">Diplomate</label>
                <input type="checkbox" name="box[]" value="Diplomate">
                <label name="box[]">Commercial</label>
                <input type="checkbox" name="box[]" value="Commercial">
                <label name="box[]">Technicien</label>
                <input type="checkbox" name="box[]" value="Technicien">
                <label name="box[]">Comptable</label>
                <input type="checkbox" name="box[]" value="Comptable">
                <p><input type="submit" value="Afficher"></p>
                <?php
                if(isset($_POST['nom']) AND $_POST['nom'] != "" AND isset($_POST['genre']) AND $_POST['genre'] != "" AND isset($_POST['box'])){
                    $nom = $_POST['nom'];
                    $genre = $_POST['genre'];
                    $compt = $_POST['box'];
                    $afficheComp = " ";

                    switch($genre){
                        case 1 :
                            $genre = 'femme';
                            break;
                        case 2 :
                            $genre = 'homme';
                            break;
                        case 3 :
                            $genre = 'autre';
                            break;
                    }
                    foreach($compt as $value){
                        $afficheComp = $afficheComp." ".$value;
                    }
                    echo "$nom se défini en tant que $genre et possède les compétences suivante: $afficheComp.";
                }else {
                    echo "<br>Champ nom vide!";
                }
                ?>
            </fieldset>
        </form>
        <?php
        // Exercice 17 :
        // Sur la base du HTML suivant, afficher le score d'un Dev, en faisant la somme la point :
        // - première checkbox = 5 points
        // - 2nd checkbox = 20 points
        // - 3eme checkbox = 20 points
        // - 4eme checkbox = 10 points
        // - 5eme checkbox = -50 points
        echo "<h3>Exercice 17</h3>";
        ?>
        <form action="" method="post">
            <fieldset>
                <legend><h4>Calculez votre score de DEV</h4></legend>
                <input type="checkbox" name="score[]" value="1">
                <label for="score[]">Vous aimez le Ctrl+C / Ctrl+V ?</label>
                <br>
                <input type="checkbox" name="score[]" value="2">
                <label for="score[]">Vous avez un canard en plastique ou en peluche ?</label>
                <br>
                <input type="checkbox" name="score[]" value="3">
                <label for="score[]">Vous parlez à votre canard quand vous avez un problème ?</label>
                <br>
                <input type="checkbox" name="score[]" value="4">
                <label for="score[]">Vous êtes Dev Full Stack ?</label>
                <br>
                <input type="checkbox" name="score[]" value="5">
                <label for="score[]">Vous codez en Cobol ?</label>
                <br>
                <br>
                <input type="submit">
                <?php
                if(isset($_POST['score'])){
                    $score = $_POST['score'];
                    $scoreTotal = 0;
                    foreach($score as $value){
                        switch($value){
                            case 1 :
                                $scoreTotal += 5;
                                break;
                            case 2 :
                                $scoreTotal += 20;
                                break;
                            case 3 :
                                $scoreTotal += 20;
                                break;
                            case 4 :
                                $scoreTotal += 10;
                                break;
                            case 5 :
                                $scoreTotal += -50;
                                break;
                        }
                    }
                    echo " Votre score est de $scoreTotal.";
                }else {
                    echo " Bah faut cocher mon con!";
                }
                ?>
            </fieldset>
        </form>
    </body>
</html>