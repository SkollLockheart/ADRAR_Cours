<?php
    session_start();
    include('utils/connect.php');
    include('manager/manager_user.php');
    include('vue/vue_header.php');
    include('vue/vue_profil.php');

    if(isset($_SESSION['connexion'])){
        $message_profil = "<form action='' method='POST'>
                                <p>Nom : <input type='text' name='name_user' value='".$_SESSION['name_user']."'required</p>
                                <p>Prenom : <input type='text' name='first_name_user' value='".$_SESSION['first_name_user']."'required</p>
                                <p>Login : <input type='text' name='login_user' value='".$_SESSION['login_user']."'required</p>
                            </form>";
        if(isset($_POST['name_user']) AND !empty($_POST['name_user']) AND isset($_POST['first_name_user']) AND !empty($_POST['first_name_user']) AND isset($_POST['login_user']) AND !empty($_POST['login_user'])){
            $name_user = $_POST['name_user'];
            $first_name_user = $_POST['first_name_user'];
            $login_users = $_POST['login_users'];

            $user = new Manager_user($_SESSION['id_user'],$name_user,$first_name_user,$login_users,$_SESSION['mdp_user']);

            $message = $user->updateUsers($bdd);

            echo $message;
            $_SESSION['name_user'] = $name_user;
            $_SESSION['first_name_user'] = $first_name_user;
            $_SESSION['login_user'] = $login_user;

            header('Location:http://localhost/Jour%2011/TASK_FINAL_MANAGER/profil');
        }
    }else{
        $message_profil = "<h3>Personne n\'est connecté.</h3>";
    }
    include('vue/vue_footer.php');

    // $login_user = $_SESSION['login_user'];
        
    // $user_profil = new Manager_user ("","","",$login_user,"");
    // $data = $user_profil-> selectUserFromLogin($bdd);

    // if(isset($_POST['login_user']) AND $_POST['login_user']!=""){
    //     if(!empty($data)){
    //         foreach($data as $row){
    //             if($row['login_user'] === $login_user){
    //                 $user = new Manager_user ($row['id_user'],$row['name_user'],$row['first_name_user'],$row['login_user'],$row['mdp_user']);
    //                 $id_user = $row['id_user'];
    //                 $user->UpdateMyLogin($_POST['login_user'],$bdd,$id_user);

    //             }
    //         }
    //     }
    // }

    

    echo '<script>
            let message_profil = document.querySelector("#profil");
            message_profil.innerHTML = "'.$message_profil.'";
         </script>';
?>