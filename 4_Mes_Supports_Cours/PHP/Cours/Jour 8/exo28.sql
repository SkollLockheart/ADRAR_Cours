CREATE database Utilisateur;
use Utilisateur;

CREATE table utilisateur(
	id_utilisateur int primary key auto_increment not null,
    login_utilisateur varchar(50) not null unique,
    mdp_utilisateur varchar(200) not null
)ENGINE=InnoDB;