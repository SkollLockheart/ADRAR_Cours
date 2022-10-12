USE ticket;
UPDATE categorie SET nom_categorie='automobile' WHERE id_categorie=3;
UPDATE vendeur SET prenom_vendeur='Albert' WHERE nom_vendeur='Brunet';
UPDATE article SET prix_article=0.60 WHERE prix_article>0.50;
UPDATE vendeur SET nom_vendeur='Adrar' WHERE prenom_vendeur LIKE '%e%';
UPDATE ticket SET  id_vendeur=4 WHERE date_ticket BETWEEN '1990/01/01 00:00:00' AND '2021/08/30 12:59:59';