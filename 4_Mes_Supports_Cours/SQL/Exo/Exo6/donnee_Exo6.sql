USE exo1;
INSERT INTO utilisateur(nom_util,prenom_util,mail_util,mdp_util) values
('Nom UN','Prénom UN','mail@UN','MDP_UN'),
('Nom DEUX','Prénom DEUX','mail@DEUX','MDP_DEUX'),
('Nom TROIS','Prénom TROIS','mail@TROIS','MDP_TROIS'),
('Nom QUATRE','Prénom QUATRE','mail@QUATRE','MDP_QUATRE'),
('Nom CINQ','Prénom CINQ','mail@CINQ','MDP_CINQ');
INSERT INTO photo(nom_photo,url_photo) values
('Image UN','urlimage.1'),
('Image DEUX','urlimage.2'),
('Image TROIS','urlimage.3'),
('Image QUATRE','urlimage.4'),
('Image CINQ','urlimage.5');
INSERT INTO message(date_message,contenu_message,id_util) values
('2001/01/01 01:01:01','Message UN',5),
('2002/02/02 02:02:02','Message DEUX',1),
('2003/03/03 03:03:03','Message TROIS',4),
('2004/04/04 04:04:04','Message QUATRE',2),
('2005/05/05 05:05:05','Message CINQ',3);
INSERT INTO categorie(nom_cat) values
('Categorie UN'),
('Categorie DEUX'),
('Categorie TROIS'),
('Categorie QUATRE'),
('Categorie CINQ');
INSERT INTO article(titre_article,contenu_article,date_article,id_util) values
('Titre Article Un','Lorem UN','2001/01/01 01:01:01',5),
('Titre Article DEUX','Lorem DEUX','2002/02/02 02:02:02',4),
('Titre Article TROIS','Lorem TROIS','2003/03/03 03:03:03',3),
('Titre Article QUATRE','Lorem QUATRE','2004/04/04 04:04:04',2),
('Titre Article CINQ','Lorem CINQ','2005/05/05 05:05:05',1);