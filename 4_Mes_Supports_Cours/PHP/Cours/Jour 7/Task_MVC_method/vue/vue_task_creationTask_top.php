<form action="" method="POST">
    <fieldset>
        <legend>Création tâches</legend>
        <label for="nom_task">Nommé la tâche</label>
        <br>
        <input type="text" name="nom_task">
        <br>
        <br>
        <label for="content_task">Contenu de la tâche</label>
        <br>
        <input type="text" name="content_task">
        <br>
        <br>
        <input type="date" name="date_task">
        <br>
        <br>
        <input class="bouton" type="submit" value="Créer">
        <label for="pet-select">Choisissez un utilisateur:</label>
        <select name="userSelect" >
            <option value="">--Please choose an option--</option>
            <option value="dog">Dog</option>

        </select>