CREATE database articles;
USE articles;

CREATE table articles(
	id_article int primary key not null auto_increment,
    nom_article varchar(50) not null unique,
    contenu_article varchar(255) not null
)ENGINE=InnoDB;