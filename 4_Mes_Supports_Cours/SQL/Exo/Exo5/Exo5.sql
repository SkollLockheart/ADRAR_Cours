use ticket;
SELECT nom_article,prix_article FROM article;
SELECT id_categorie,nom_categorie FROM categorie ORDER BY nom_categorie ASC;
SELECT id_ticket,date_ticket,id_vendeur FROM ticket WHERE id_ticket=1;
SELECT id_ticket,date_ticket,id_vendeur FROM ticket WHERE date_ticket>'2021/12/31';
SELECT id_ticket,date_ticket,id_vendeur FROM ticket WHERE date_ticket BETWEEN '2018/11/25 12:26:33' AND '2022/12/31 11:59:59';
SELECT id_article,nom_article,prix_article,description_article FROM article WHERE nom_article LIKE 't%';