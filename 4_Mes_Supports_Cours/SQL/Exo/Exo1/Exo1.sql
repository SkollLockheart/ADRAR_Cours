create database exo1;
use exo1;
create table article(
id_article int auto_increment primary key not null,
titre_article varchar(50),
contenu_article text,
date_article date,
id_util int not null
)engine=InnoDB;
create table categorie(
id_cat int auto_increment primary key not null,
nom_cat varchar(50)
)engine=InnoDB;
create table utilisateur(
id_util int auto_increment primary key not null,
nom_util varchar(50) not null,
prenom_util varchar(50) not null,
mail_util varchar(50) not null,
mdp_util varchar(50) not null
)engine=InnoDB;
create table photo(
id_photo int auto_increment primary key not null,
nom_photo varchar(50) not null,
url_photo varchar(50) not null
)engine=InnoDB;
create table message(
id_message int auto_increment primary key not null,
date_message datetime not null,
contenu_message varchar(255),
id_util int not null
)engine=InnoDB;
create table posseder(
id_cat int not null,
id_article int not null,
primary key(id_cat,id_article)
)engine=InnoDB;
create table integrer(
id_photo int not null,
id_article int not null,
primary key(id_photo,id_article)
)engine=InnoDB;
create table ecrire(
id_message int not null,
id_util int not null,
primary key(id_message,id_util)
)engine=InnoDB;
alter table posseder
add constraint fk_posseder_categorie
foreign key(id_cat)
references categorie(id_cat);
alter table posseder
add constraint fk_posseder_article
foreign key(id_article)
references article(id_article);
alter table article
add constraint fk_rediger_utilisateur
foreign key(id_util)
references utilisateur(id_util);
alter table integrer
add constraint fk_integrer_photo
foreign key(id_photo)
references photo(id_photo);
alter table integrer
add constraint fk_integrer_article
foreign key(id_article)
references article(id_article);
alter table message
add constraint fk_repondre_utilisateur
foreign key(id_util)
references utilisateur(id_util);
alter table ecrire
add constraint fk_ecrire_utilisateur
foreign key(id_util)
references utilisateur(id_util);
alter table ecrire
add constraint fk_ecrire_message
foreign key(id_message)
references message(id_message);