<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO BDD</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="entrez votre login">
        <input type="text" name="name_user" placeholder="entrez votre nom">
        <input type="submit">
    </form>

    <?php
    if(isset($_POST['login']) AND $_POST['login'] != "" AND isset($_POST['name_user']) AND $_POST['name_user'] != ""){
        $login = $_POST['login'];
        $name_user = $_POST['name_user'];
        
        //Connexion a la BDD
        $bdd = new PDO('mysql:host=localhost;dbname=users','root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // try{
        //     $req = $bdd->query("insert into users (login_user, name_user) values ('$login', '$name_user')");

        //     echo"<p>User enregistré en BDD</p>";

        // }catch(Exception $error){
        //     var_dump("<p>".$error."<p>");
        // }
        try{
            $req = $bdd->prepare("insert into users (login_user,name_user) values (:login,:name_user)");
            $req->execute(array(
                'login' => $login,
                'name_user' => $name_user
            ));
            echo "<p>User enregistré en BDD<p>";
        }catch(Exception $error){
            var_dump("<p>".$error."<p>");
        }
        $bdd=null;
        $req=null;
    }
    ?>

    <h3>User Enregistré</h3>
    <ul>
        <?php
            $bdd = new PDO('mysql:host=localhost;dbname=users','root','',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            try{
                //requête préparée
                $req=$bdd->prepare('select login_user, name_user from users');
                $req->bindParam(1,$login_user,PDO::PARAM_STR);
                $req->bindParam(2,$name_user,PDO::PARAM_STR);
                //exécution de la requête
                $req->execute();
                //avec un while
                // while($data=$req->fetch()){
                //     echo "<li>Login: ".$data['login_user']." - Nom : ".$data['name_user']."<li>";
                // }
                // avec fetchAll
                $data = $req->fetchAll();
                foreach($data as $row){
                    echo "<li>Login: ".$row['login_user']." - Nom : ".$row['name_user']."<li>";
                }
            }catch(Exception $error){
                var_dump("<p>".$error."<p>");
            }

        ?>
    </ul>

</body>
</html>