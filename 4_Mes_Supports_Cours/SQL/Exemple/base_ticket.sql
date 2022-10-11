create database ticket;
-- commentaire
use ticket;
create table categorie(
id_categorie int auto_increment primary key not null,
nom_categorie varchar(50) not null
)Engine=InnoDB;
create table article(
id_article int auto_increment primary key not null,
nom_article varchar(50) not null,
prix_article float not null,
description_article text not null
)Engine=InnoDB;
create table ticket(
id_ticket int auto_increment primary key not null,
date_ticket datetime not null,
id_vendeur int not null
)Engine=InnoDB;
create table vendeur(
id_vendeur int auto_increment primary key not null,
nom_vendeur varchar(50) not null,
prenom_vendeur varchar(50) not null
)Engine=InnoDB;
create table posseder(
id_article int not null,
id_categorie int not null,
primary key(id_article, id_categorie)
)Engine=InnoDB;
create table ajouter(
id_ticket int not null,
id_article int not null,
qtx int not null,
primary key(id_ticket,id_article)
)Engine=InnoDB;
alter table ticket
add constraint fk_vendre_vendeur
foreign key(id_vendeur)
references vendeur(id_vendeur);
alter table posseder
add constraint fk_posseder_article
foreign key(id_article)
references article(id_article);
alter table posseder
add constraint fk_posseder_categorie
foreign key(id_categorie)
references categorie(id_categorie);
alter table ajouter
add constraint fk_ajouter_article
foreign key(id_article)
references article(id_article);
alter table ajouter
add constraint fk_ajouter_ticket
foreign key(id_ticket)
references ticket(id_ticket);
alter table categorie
add column url_categorie varchar(50);
alter table categorie
drop column url_categorie;
alter table categorie
modify column nom_categorie varchar(100);