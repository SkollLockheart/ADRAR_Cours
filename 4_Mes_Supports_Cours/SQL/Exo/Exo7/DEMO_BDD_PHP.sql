CREATE database	users;
use users;

create table users(
	id_user int primary key not null auto_increment,
    login_user varchar(50) not null unique,
    name_user varchar(50) not null
)ENGINE=InnoDB;