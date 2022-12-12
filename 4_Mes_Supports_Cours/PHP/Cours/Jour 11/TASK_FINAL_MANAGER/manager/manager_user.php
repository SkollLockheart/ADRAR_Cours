<?php   
    include('model/model_user.php');
    class Manager_user extends User{

    //METHOD
        //Method Ajouter User
        public function ajouterUser($bdd){
            try{
                $req = $bdd -> prepare("insert into user (name_user, first_name_user, login_user, mdp_user) values (?,?,?,?)");
                $name_user=$this->getName_user();
                $first_name_user=$this->getFirst_name_user();
                $login_user=$this->getLogin_user();
                $mdp_user=$this->getMdp_user();
                $req -> bindParam(1,$name_user,PDO::PARAM_STR);
                $req -> bindParam(2,$first_name_user,PDO::PARAM_STR);
                $req -> bindParam(3,$login_user,PDO::PARAM_STR);
                $req -> bindParam(4,$mdp_user,PDO::PARAM_STR);
                $req -> execute();
                return "<h3>Compte créé!</h3>";
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        //Method Afficher User
        public function afficherUser($bdd){
            try{
                $req=$bdd->prepare('select login_user, id_user from user');
                $req->execute();
                $data = $req->fetchAll();
                return $data;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        
        //Method pour selectionner un utlisateur à partir de son login
        public function selectUserFromLogin($bdd){
            $login_user = $this->getLogin_user();
            try{
                $req=$bdd->prepare('select * from user where login_user =?');
                $req->bindParam(1,$login_user,PDO::PARAM_STR);
                $req->execute();
                $data = $req->fetchAll();
                return $data;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        //Method Supprimer User
        public function deleteUser($bdd,$id_user){
            try{
                $req=$bdd->prepare('delete from user where id_user in (?)');
                $req -> bindParam(1,$id_user,PDO::PARAM_INT);
                $req->execute();
                echo "<p id=\"validation\">Compte supprimé!</p>";
            
                $bdd=null;
                $req=null;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }

        //Méthode de mise à jour 
        public function updateUser($bdd){
            $id_user = $this->getId_user();
            $name_user = $this->getName_user();
            $first_name_user = $this->getFirst_name_user();
            $login_user = $this->getLogin_user();
            $mdp_user = $this->getMdp_user();

            try{
                $req=$bdd('update user set name_user = ?, first_name_user = ?, login_user = ?, mdp_user = ? were id_users = ?');
                $req->bindParam(1,$name_user,PDO::PARAM_STR);
                $req->bindParam(2,$first_name_user,PDO::PARAM_STR);
                $req->bindParam(3,$login_user,PDO::PARAM_STR);
                $req->bindParam(4,$mdp_user,PDO::PARAM_STR);
                $req->bindParam(5,$id_user,PDO::PARAM_INT);

                $req->execute();

                return 'Modification effectué.';


            }catch(Exception $e){
                die('ERROR: '.$e->getMessage());
            }
        }

        // //Method modifier sonr propre Login
        // public function UpdateMyLogin($login_user,$bdd,$id_user){
        //     $this -> setLogin_user($login_user);
        //     try{
        //         $req=$bdd->prepare('update user set login_user=? where id_user='.$id_user.'');
        //         $req -> bindParam(1,$login_user,PDO::PARAM_STR);
        //         $req -> execute();
        //         echo 'Login modifié en '.$login_user.'';

        //     }catch(Exception $e){
        //         echo "<p>".$e."</p>"; 
        //         $bdd=null;
        //         $req=null; 
        //     }
        // }
    }
?>