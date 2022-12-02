<!--
    MON FICHIER MODEL de mon architecture Model-Vue-Controler
    -> Contient TOUT ce qui concerne mes requêtes à la BDD
-->

<?php
try{
    $ext = new SplFileInfo($name);
    $tabExt = $ext->getExtension();
    if($tabExt == 'jpg' OR $tabExt == 'png' OR $tabExt == 'gif'){
            $req = $bdd -> prepare("insert into users (login_user, mdp_user) values (?,?)");
            $req -> bindParam(1,$login_user,PDO::PARAM_STR);
            $req -> bindParam(2,$mdp_user,PDO::PARAM_STR);
            $req -> execute();
            $req = $bdd -> prepare("select id_user from users where login_user in (?)");
            $req -> bindParam(1,$login_user,PDO::PARAM_STR);
            $req -> execute();
            $data = $req->fetchAll();
            foreach($data as $id_user);
            $req = $bdd -> prepare("insert into image (url_img, id_user) values (?,?)");
            $req -> bindParam(1,$url_img,PDO::PARAM_STR);
            $req -> bindParam(2,$id_user['id_user'],PDO::PARAM_INT);
            $req -> execute();
            echo "<p>Compte créé!</p>";
    } else {
        echo 'ERROR: Type de fichier invalide.';
    }

    $req = null;
    $bdd = null;
}catch(Exception $error){

    die('Erreur : '.$error->getMessage());


    $req = null;
    $bdd = null;
}
?>