<form action="" method="POST">
    <fieldset> 
        <legend><h4>Création tâches</h4></legend>
        <label for="nom_task">Nommé la tâche</label>
        <br>
        <input type="text" name="nom_task">
        <br>
        <br>
        <label for="content_task">Contenu de la tâche</label>
        <br>
        <textarea name="content_task" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label for="date_task">Date de la tâche : </label>
        <input type="date" name="date_task">
        <br>   
        <br>
        <label for="id_cat">Choisissez une tâche:</label>
        <br>
        <select name="id_cat" id="select_cat">
            
        </select>
        <br>
        <br>
        <input class="bouton" type="submit" value="Créer">
    </fieldset>
</form>
<div id="message_task"></div>