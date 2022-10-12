use ticket;

insert into categorie(nom_categorie) values
('alimentaire'),
('produit d\'entretien'),
('bricolage'),
('boisson');
insert into article(nom_article,prix_article,description_article) values
('pain',0.80,'baguette de pain'),
('lait',0.50,'bouteille de lait'),
('farine',0.90,'farine 1kg'),
('tomate',1.20,'koli de tomate');
insert into vendeur(prenom_vendeur,nom_vendeur) values
('Olivie', 'Potier'),
('Auguste-Louis', 'Arnaud'),
('Margot', 'Merle'),
('Stéphane', 'Brunet'),
('Patricia', 'Rolland');

insert into posseder(id_article,id_categorie) values
(1,1),(1,4),(2,1),(2,4),(3,1),(3,4),(4,1),(4,3),(4,2);
insert into ticket(date_ticket,id_vendeur) values
('2021/08/25 10:10:10',3),
('2018/11/25 12:26:33',2),
('2022/01/01 06:12:45',1),
('1998/11/29 16:45:36',4),
('1999/01/14 18:20:47',2),
('2021/08/09 14:17:36',5);
insert into ajouter(id_article,qtx,id_ticket) values
(1,4,1),
(2,3,1),
(4,11,1),
(3,4,3),
(2,6,5);