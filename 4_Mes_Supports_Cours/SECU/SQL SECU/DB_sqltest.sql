CREATE DATABASE sqltest;
USE sqltest;
-- tables
CREATE TABLE users(
id_users INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
name_users VARCHAR(50) NOT NULL,
mail_users VARCHAR(50) NOT NULL,
password_users VARCHAR(100) NOT NULL
)Engine=InnoDB;

CREATE TABLE category(
id_category INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
name_category VARCHAR(50) NOT NULL
)Engine=InnoDB;

CREATE TABLE article(
id_article INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title_article VARCHAR(50) DEFAULT 'test' NOT NULL,
content_article TEXT NOT NULL,
date_article DATE NOT NULL,
id_users INT NULL
)Engine=InnoDB;

-- table association

CREATE TABLE completed(
id_article INT NOT NULL,
id_category INT NOT NULL,
PRIMARY KEY(id_article,id_category)
)Engine=InnoDB;

-- contraintes

ALTER TABLE article
ADD CONSTRAINT fk_write_users
FOREIGN KEY(id_users)
REFERENCES users(id_users);

ALTER TABLE completed
ADD CONSTRAINT fk_completed_article
FOREIGN KEY(id_article)
REFERENCES article(id_article);

ALTER TABLE completed
ADD CONSTRAINT fk_completed_category
FOREIGN KEY(id_category)
REFERENCES category(id_category);