CREATE database projet_task;
USE projet_task;

CREATE table user(
	id_user int primary key not null auto_increment,
    name_user varchar(50) not null,
    first_name_user varchar(50) not null,
    login_user varchar(50) not null unique,
    mdp_user varchar(50) not null
)ENGINE=InnoDB;

CREATE table category(
	id_cat int primary key not null auto_increment,
    name_cat varchar(50) not null
)ENGINE=InnoDB;

CREATE table task(
	id_task int primary key not null auto_increment,
    nom_task varchar(50) not null,
    content_task text not null,
    date_task date not null,
    id_user int not null,
    id_cat int not null
)ENGINE=InnoDB;

alter table task
add constraint fk_add_user
foreign key(id_user)
references user(id_user);

alter table task
add constraint fk_own_category
foreign key(id_cat)
references category(id_cat);