CREATE DATABASE bestiaire;
USE bestiaire;

CREATE TABLE type_crea(
id_type_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_type_crea VARCHAR(50) NOT NULL
)ENGINE=InnoDB;
CREATE TABLE milieu_crea(
id_milieu_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_milieu_crea VARCHAR(50) NOT NULL
)ENGINE=InnoDB;
CREATE TABLE climat_crea(
id_climat_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_climat_crea VARCHAR(50) NOT NULL
)ENGINE=InnoDB;
CREATE TABLE fp_crea(
id_fp_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_fp_crea VARCHAR(50) NOT NULL
)ENGINE=InnoDB;
CREATE TABLE taille_crea(
id_taille_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_taille_crea VARCHAR(50) NOT NULL
)ENGINE=InnoDB;
CREATE TABLE alignement_crea(
id_align_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_align_crea VARCHAR(50) NOT NULL
)ENGINE=InnoDB;
CREATE TABLE origine_crea(
id_origine_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_origine_crea VARCHAR(50) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE creature(
id_crea INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_crea VARCHAR(50) NOT NULL,
id_type_crea INT NOT NULL,
id_milieu_crea INT NOT NULL,
id_climat_crea INT NOT NULL,
id_fp_crea INT NOT NULL,
id_taille_crea INT NOT NULL,
id_align_crea INT NOT NULL,
id_origine_crea INT NOT NULL
)ENGINE=InnoDB;

CREATE TABLE role_util(
id_role_util INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom_role_util VARCHAR(50) NOT NULL
)ENGINE=InnoDB;

CREATE TABLE utilisateur(
id_util INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
pseudo_util VARCHAR(50) NOT NULL,
mdp_util VARCHAR(100) NOT NULL,
email_util VARCHAR(100) NOT NULL,
id_role_util INT NOT NULL
)ENGINE=InnoDB;

CREATE TABLE creation(
id_crea INT NOT NULL,
id_util INT NOT NULL,
date_creation DATETIME NOT NULL,
PRIMARY KEY(id_util,id_crea,date_creation)
)ENGINE=InnoDB;

ALTER TABLE creature
ADD CONSTRAINT fk_typer_type_crea
FOREIGN KEY(id_type_crea)
REFERENCES type_crea(id_type_crea);
ALTER TABLE creature
ADD CONSTRAINT fk_situer_milieu_crea
FOREIGN KEY(id_milieu_crea)
REFERENCES milieu_crea(id_milieu_crea);
ALTER TABLE creature
ADD CONSTRAINT fk_associer_climat_crea
FOREIGN KEY(id_climat_crea)
REFERENCES climat_crea(id_climat_crea);
ALTER TABLE creature
ADD CONSTRAINT fk_factoriser_fp_crea
FOREIGN KEY(id_fp_crea)
REFERENCES fp_crea(id_fp_crea);
ALTER TABLE creature
ADD CONSTRAINT fk_mesurer_taille_crea
FOREIGN KEY(id_taille_crea)
REFERENCES taille_crea(id_taille_crea);
ALTER TABLE creature
ADD CONSTRAINT fk_aligner_alignement_crea
FOREIGN KEY(id_align_crea)
REFERENCES alignement_crea(id_align_crea);
ALTER TABLE creature
ADD CONSTRAINT fk_originer_origine_crea
FOREIGN KEY(id_origine_crea)
REFERENCES origine_crea(id_origine_crea);

ALTER TABLE utilisateur
ADD CONSTRAINT fk_attribuer_role_util
FOREIGN KEY(id_role_util)
REFERENCES role_util(id_role_util);

ALTER TABLE creation
ADD CONSTRAINT fk_cration_utilisateur
FOREIGN KEY(id_util)
REFERENCES utilisateur(id_util);
ALTER TABLE creation
ADD CONSTRAINT fk_creation_creature
FOREIGN KEY(id_crea)
REFERENCES creature(id_crea);