USE exo1;
SELECT article.id_article,titre_article,contenu_article,date_article,id_util,nom_cat FROM article 
INNER JOIN categorie,posseder
WHERE categorie.id_cat=posseder.id_cat
AND article.id_article=posseder.id_article;