<?php
    class Task
    {
        //Attributs
        private $id_task;
        private $nom_task;
        private $content_task;
        private $date_task;
        private $id_user;
        private $id_cat;

        //Constructeur
        public function __construct($id_task,$nom_task,$content_task,$date_task,$id_user,$id_cat){
            $this->id_task = $id_task;
            $this->nom_task = $nom_task;
            $this->content_task = $content_task;
            $this->date_task = $date_task;
            $this->id_user = $id_user;
            $this->id_cat = $id_cat;
        }

        //GETTER et SETTER
        public function getId_task(){
            return $this->id_task;
        }
        public function setId_task($id_task){
            $this->id_task = $id_task;
        }
        
        public function getNom_task(){
            return $this->nom_task;
        }
        public function setNom_task($nom_task){
            $this->nom_task = $nom_task;
        }
        
        public function getContent_task(){
            return $this->content_task;
        }
        public function setContent_task($content_task){
            $this->content_task = $content_task;
        }
        
        public function getDate_task(){
            return $this->date_task;
        }
        public function setDate_task($date_task){
            $this->date_task = $date_task;
        }
        
        public function getId_user(){
            return $this->id_user;
        }
        public function setId_user($id_user){
            $this->id_user = $id_user;
        }
        
        public function getId_cat(){
            return $this->id_cat;
        }
        public function setId_cat($id_cat){
            $this->id_cat = $id_cat;
        }

        //METHOD
        //Method Ajouter Task
        public function ajouterTask($bdd){
            $nom_task=$this->getNom_task();
            $content_task=$this->getContent_task();
            $date_task=$this->getDate_task();
            $id_user=$this->getId_user();
            $id_cat=$this->getId_user();
            try{
                $req = $bdd -> prepare("insert into task (nom_task, content_task, date_task,id_user,id_cat) values (?,?,?,?,?)");
                $req -> bindParam(1,$nom_task,PDO::PARAM_STR);
                $req -> bindParam(2,$content_task,PDO::PARAM_STR);
                $req -> bindParam(3,$date_task,PDO::PARAM_STR);
                $req -> bindParam(4,$id_user,PDO::PARAM_INT);
                $req -> bindParam(5,$id_cat,PDO::PARAM_INT);
                $req -> execute();
                echo "<p id=\"validation\">Tâche créé!</p>";
                $bdd=null;
                $req=null;
            }catch(Exception $e){
                echo "<p>".$e."</p>"; 
                $bdd=null;
                $req=null; 
            }
        }
    }
?>