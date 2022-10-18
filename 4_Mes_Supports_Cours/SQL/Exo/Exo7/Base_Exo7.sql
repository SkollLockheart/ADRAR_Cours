CREATE DATABASE exo7;
USE exo7;
CREATE TABLE users(
id_users int auto_increment primary key not null,
name_users varchar(50) not null,
first_name_users varchar(50) not null,
mail_users varchar(50) not null,
password_users varchar(100) not null,
active_users tinyint not null,
id_right int not null
)ENGINE=InnoDB;
CREATE TABLE right_(
id_right int auto_increment primary key not null,
name_right varchar(50) not null
)ENGINE=InnoDB;
CREATE TABLE article(
id_art int auto_increment primary key not null,
name_art varchar(50) not null,
content_art text not null,
date_art datetime not null,
validate_art tinyint(1) default(0),
id_users int not null
)ENGINE=InnoDB;
CREATE TABLE add_(
id_art int not null,
id_users int not null,
date_com datetime not null,
text_com varchar(255) not null,
valid_com tinyint not null,
primary key (id_art,id_users,date_com)
)ENGINE=InnoDB;
CREATE TABLE category(
id_cat int auto_increment primary key not null,
name_cat varchar(50) not null
)ENGINE=InnoDB;
CREATE TABLE own(
id_cat int not null,
id_art int not null,
primary key (id_cat,id_art)
)ENGINE=InnoDB;

ALTER TABLE users
ADD CONSTRAINT fk_possesse_right
FOREIGN KEY(id_right)
REFERENCES right_(id_right);
ALTER TABLE add_
ADD CONSTRAINT fk_add_users
FOREIGN KEY(id_users)
REFERENCES users(id_users);
ALTER TABLE add_
ADD CONSTRAINT fk_add_article
FOREIGN KEY(id_art)
REFERENCES article(id_art);
ALTER TABLE article
ADD CONSTRAINT fk_write_users
FOREIGN KEY(id_users)
REFERENCES users(id_users);
ALTER TABLE own
ADD CONSTRAINT fk_own_article
FOREIGN KEY(id_art)
REFERENCES article(id_art);
ALTER TABLE own
ADD CONSTRAINT fk_own_category
FOREIGN KEY(id_cat)
REFERENCES category(id_cat);