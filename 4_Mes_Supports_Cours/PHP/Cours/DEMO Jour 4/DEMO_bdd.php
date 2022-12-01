<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO BDD</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data"> 
        <h2>Importer une image</h2> 
        <input type="file" name="file"> 
        <p><button type="submit">Importer</button></p> 
    </form> 
    <?php
    /*-----------------------------------------------------
    Test (import du fichier) :
    -----------------------------------------------------*/
    //test si le fichier importé existe
    if(isset($_FILES['file'])){
    //stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
        $tmpName = $_FILES['file']['tmp_name'];
        //stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
        $name = $_FILES['file']['name'];
        //stocke la taille du fichier en octets
        $size = $_FILES['file']['size'];
        //stocke les erreurs (pb d'import, pb de droits etc…)
        $error = $_FILES['file']['error'];
        //récuprérer l'extension d'un fichier
        $ext = new SplFileInfo($name);
        $tabExt = $ext->getExtension();
        if($tabExt == 'png'){
            //récupérer les dimension d'une image
            $dimension = getimagesize($tmpName);

            //affichage du tableau
            // var_dump($dimension);
            $width=$dimension[0];
            $height=$dimension[1];

            if($width<=800 AND $height<=800){
                //déplacer le fichier importé dans le dossier image à la racine du projet
                $fichier = move_uploaded_file($tmpName, "./import/$name");
                echo 'Fichier importé.';
            } else {
                echo 'ERROR: Image trop grande.';
            }

        } else {
            echo 'ERROR: Type de fichier invalide.';
        }
    }
    ?>

</body>
</html>