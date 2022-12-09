<?php
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

/*--------------------------ROUTER -----------------------------*/
//test de la valeur $path dans l'URL et import de la ressource
switch($path){
    case $path === "/Jour%2010/TASK_FINAL_FORM/" or $path === "/Jour%2010/TASK_FINAL_FORM/accueil":
        include './controler/controler_accueil.php';
        break ;

    case $path === "/Jour%2010/TASK_FINAL_FORM/category":
        include './controler/controler_category.php';
        break ;

    case $path === "/Jour%2010/TASK_FINAL_FORM/deconnexion":
        include './controler/controler_deconnexion.php' ;
        break ;

    case $path === "/Jour%2010/TASK_FINAL_FORM/profil":
        include './controler/controler_profil.php' ;
        break ;
        
    case $path === "/Jour%2010/TASK_FINAL_FORM/task":
        include './controler/controler_task.php' ;
        break ;

    //route /Jour_9/Demo_routing -> ./404.php
    default :
        include './controler/404.php' ;
        break ;
}
?>