CREATE database exo_import;
USE exo_import;

CREATE table users(
	id_user int primary key not null auto_increment,
    login_user varchar(50) not null unique,
    mdp_user varchar(50) not null
)ENGINE=InnoDB;

CREATE table image(
	id_image int primary key not null auto_increment,
    url_img varchar(100) not null,
    id_user int not null
)ENGINE=InnoDB;

ALTER table image
add constraint fk_add_users
foreign key(id_user)
references users(id_user);