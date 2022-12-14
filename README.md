requête sql :

afficher la liste des produits du panier d'un client :

SELECT nom_produit, qte 
FROM users AS u
INNER JOIN panier on u.fk_panier = id_panier
INNER JOIN panier_produits AS p_p on p_p.fk_panier = id_panier
INNER JOIN produits on fk_produit = id_produit 
WHERE id_user = 36
