1 -- Création de la BDD :
CREATE DATABASE magasin;

2 -- Création de la table produits:
CREATE TABLE produits(id INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL, nom_produit VARCHAR(150), reference_produit VARCHAR(100), prix_produit FLOAT, stock_produit INT, date_ajout DATE);

3 -- Insertion de produits dans la BDD :
 INSERT INTO produits (nom_produit, reference_produit, prix_produit, stock_produit, date_ajout) VALUES('Playstation4', 512, 399.99, 300, 2018-09-09);

 4 -- Tout les produits classé du plus récent au plus vieux :
  SELECT nom_produit FROM produits ORDER BY date_ajout DESC;

  5 -- Afficher les 5 premiers produits :
  SELECT * FROM produits LIMIT 4;

  6 -- Afficher les 5 derniers produits :
 SELECT * FROM produits LIMIT 4,9;

 7 -- Ajouter une colonne date_vente :
 ALTER TABLE produits ADD date_vente DATETIME;

8 -- Afficher les produits entre 2 date de vente :
  SELECT * FROM produits  WHERE date_ajout BETWEEN '2017-01-01' AND '2018-01-01';

9 -- Afficher les 10 produits du milieu
  SELECT * FROM produits LIMIT 1,6;

10 -- Afficher les produits commencent par une lettre spécifique
SELECT * FROM produits  WHERE nom_produit LIKE 'c%';