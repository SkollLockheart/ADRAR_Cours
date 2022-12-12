<?php
    include('model/model_task.php');

    class Manager_task extends Task{
        //METHOD
        //Method Ajouter Task
        public function ajouterTask($bdd){
            $nom_task=$this->getNom_task();
            $content_task=$this->getContent_task();
            $date_task=$this->getDate_task();
            $id_user=$this->getId_user();
            $id_cat=$this->getId_cat();
            try{
                $req = $bdd -> prepare("insert into task (nom_task, content_task, date_task,id_user,id_cat) values (?,?,?,?,?)");
                $req -> bindParam(1,$nom_task,PDO::PARAM_STR);
                $req -> bindParam(2,$content_task,PDO::PARAM_STR);
                $req -> bindParam(3,$date_task,PDO::PARAM_STR);
                $req -> bindParam(4,$id_user,PDO::PARAM_INT);
                $req -> bindParam(5,$id_cat,PDO::PARAM_INT);
                $req -> execute();
                echo "<p id=\"validation\">Tâche créé!</p>";

            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }
    }
?>