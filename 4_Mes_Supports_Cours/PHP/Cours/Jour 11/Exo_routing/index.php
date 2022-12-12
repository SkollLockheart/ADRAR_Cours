<?php
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

switch($path){
    case $path === "/Jour%2011/" or $path === "/Jour%2011/accueil":
        include 'controller/accueil.php';
        break ;

    case $path === "/Jour%2011/profil" :
        include 'controller/profil.php';
        break ;  
        
    case $path === "/Jour%2011/contact" :
    include 'controller/contact.php';
    break ; 

    default :
        include 'controller/404.php';
}
