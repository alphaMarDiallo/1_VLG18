/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
* Objectif : Créer dans PHPMyAdmin une base de données haribo dont la modélisation est ci-dessous, les étapes sont détaillées ensuite.
*/

/**
+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_stagiaire  | int(11)        | NO   | PRI  | NULL    | auto_increment |
| prenom        | varchar(100)   | NO   |      | NULL    |                |
| yeux          | varchar(30)    | NO   |      | NULL    |                |
| genre         | enum('h','f')  | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+

+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_bonbon     | int(11)        | NO   | PRI  | NULL    | auto_increment |
| nom           | varchar(100)   | NO   |      | NULL    |                |
| saveur        | varchar(100)   | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+
 
+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_manger     | int(11)        | NO   | PRI  | NULL    | auto_increment |
| id_bonbon     | int(11)        | YES  |      | NULL    |                |
| id_stagiaire  | int(11)        | YES  |      | NULL    |                |
| date_manger   | date           | NO   |      | NULL    |                |
| quantite      | int(11)        | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+

*/

/**
* REQUETES A EFFECTUER dans PHPMyAdmin
*/

--1-- lister toutes les BDD de PHPMyAdmin
SHOW DATABASES;

--2-- Créer une base de données SQL nommée HARIBO
CREATE DATABASE haribo;
--3--
/**
* créer une table stagiaire
* qui comporte 3 champs :
* - id_stagiaire => nombre qui s'auto-incrémente, requis et clé primaire
* - prenom => 100 caractères, requis
* - couleur des yeux => 30 caractères, requis
* - genre => homme ou femme, requis
*/
CREATE TABLE stagiaires(id_stagiaire INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, prenom VARCHAR(100), yeux VARCHAR(30) NOT NULL, genre ENUM('h','f') NOT NULL);
--4--
/**
* insérer dans cette table les informations de votre groupe (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO bonbons (nom, saveur) VALUES ('dragibus', 'cola');

--5--
/**
* créer une table bonbon
* qui comporte 3 champs :
* - id_bonbon => nombre qui s'auto-incrémente, requis et clé primaire
* - nom => 100 caractères, requis
* - saveur => 100 caractères, requis
*/
CREATE TABLE bonbons(id_bonbon INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, saveur VARCHAR (100) NOT NULL);
--6--
/**
* insérer dans cette table des bonbons haribo (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('jhordan', 'marron','h');

--7--
/**
* créer une table manger
* qui comporte 5 champs :
* - id_manger => nombre qui s'auto-incrémente, requis et clé primaire
* - id_stagiaire => champs de la table stagiaire
* - id_bonbon => champs de la table bonbon
* - date_manger => type date, requis
* - quantite => nombre, requis
*/
CREATE TABLE manger(id_manager INT(11)PRIMARY KEY AUTO_INCREMENT NOT NULL, FOREIGN KEY(id_bonbon) REFERENCES bonbons(id_bonbon), FOREIGN KEY (id_stagiaire) REFERENCES stagiaires(id_stagiaire), date_manger DATE NOT NULL, quantite INT(11) NOT NULL);
--8--
/**
* insérer dans la table manger des informations sur qui a consommé quel bonbon, quand et dans quelles quantités (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO manger (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (4,7,'2018-09-20', 5);

--9-- Lister les tables de la BDD *haribo*
SHOW TABlES;
--10-- voir les paramètres de la table *bonbon*
DESC bonbons
--11-- Sélectionner tous les champs de tous les enregistrements de la table *stagiaire*
SELECT * FROM stagiaires;
--12-- Rajouter un nouveau stagiaire *Patriiiick* en forçant la numérotation de l'id
INSERT INTO stagiaires VALUES ('10', 'Patriiiick', 'marron', 'h');
--13-- Rajouter un nouveau stagiaire *Mila* SANS forcer la numérotation de l'id
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Mila', 'vert', 'f');
--14-- Changer le prénom du stagiaire qui a l'id 100 de *Patriiiick* à *Patrick*
UPDATE stagiaires SET prenom = 'Patrick' WHERE id = 100;
--15-- Rajouter dans la table manger que Patrick a mangé 5 Tagada purpule le 15 septembre
INSERT INTO manger (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (2,100,'2018-09-15', 5);
--16-- Sélectionner tous les noms des bonbons
SELECT nom FROM bonbons;
--17-- Sélectionner tous les noms des bonbons en enlevant les doublons
SELECT DISTINCT nom FROM bonbons;
--18-- Récupérer les couleurs des yeux des stagiaires (Sélectionner plusieurs champs dans une table)
SELECT yeux FROM stagiaires;
--19-- Dédoublonner un résultat sur plusieurs champs
SELECT DISTINCT yeux, genre FROM stagiaires;
--20-- Sélectionner le stagiaire qui a l'id 5
SELECT * FROM stagiaires WHERE id_stagiaire = 5;
--21-- Sélectionner tous les stagiaires qui ont les yeux marrons
SELECT * FROM stagiaires WHERE yeux = 'marron';
--22-- Sélectionner tous les stagiaires dont l'id est plus grand que 9
SELECT * FROM stagiaires WHERE id_stagiaire >= 9;
--23-- Sélectionner tous les stagiaires SAUF celui dont l'id est 13 (soyons supersticieux !) :!\ il y a 2 façons de faire
SELECT *FROM stagiaires WHERE id_stagiaire != 13;
SELECT *FROM stagiaires WHERE id_stagiaire <> 13;
-24-- Sélectionner tous les stagiaires qui ont un id inférieur ou égal à 10
SELECT * FROM stagiaires WHERE id_stagiaire <= 10;
--25-- Sélectionner tous les stagiaires dont l'id est compris entre 7 et 11
SELECT * FROM stagiaires WHERE id_stagiaire BETWEEN 7 AND 11;
--26-- Sélectionner les stagiaires dont le prénom commence par un *S*
SELECT * FROM stagiaires WHERE prenom LIKE 's%';
--27-- Trier les stagiaires femmes par id décroissant
SELECT * FROM stagiaires WHERE genre = 'f' ORDER BY id_stagiaire DESC;
--28-- Trier les stagiaires hommes par prénom dans l'ordre alphabétique
SELECT * FROM stagiaires WHERE genre = 'h' ORDER BY prenom ASC;
--29-- Trier les stagiaires en affichant les femmes en premier et en classant les couleurs des yeux dans l'ordre alphabétique
SELECT * FROM stagiaires ORDER BY  genre DESC, yeux;
--30-- Limiter l'affichage d'une requête de sélection de tous les stagiaires aux 3 premires résultats
SELECT * FROM stagiaires LIMIT 3;
--31-- Limiter l'affichage d'une requête de sélection de tous les stagiaires à partir du 3ème résultat et des 5 suivants
SELECT * FROM stagiaires LIMIT 2,5;
--32-- Afficher les 4 premiers stagiaires qui ont les yeux marron
SELECT * FROM stagiaires WHERE yeux ='marron' LIMIT 4;
--33-- Pareil mais en triant les prénoms dans l'ordre alphabétique
SELECT * FROM stagiaires WHERE yeux ='marron' ORDER BY prenom LIMIT 4;
--34-- Compter le nombre de stagiaires
SELECT COUNT(prenom) FROM stagiaires;
--35-- Compter le nombre de stagiaires hommes mais en changeant le nom de la colonne de résultat par *nb_stagiaires_H*
SELECT COUNT(*) AS nb_stagiaires_H FROM stagiaires WHERE genre ='h';
--36-- Compter le nombre de couleurs d'yeux différentes
SELECT COUNT(DISTINCT yeux) FROM stagiaire;
--37-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus petit
SELECT prenom, yeux FROM stagiaires WHERE id_stagiaire = (SELECT MIN(id_stagiaire FROM stagiaires);
--38-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus grand /!\ c'est une requête imbriquée qu'il faut faire (requête sur le résultat d'une autre requête)
/!\ SELECT prenom, yeux FROM stagiaires WHERE id_stagiaire  = (SELECT MAX(id_stagiaire FROM stagiaires);
--39-- Afficher les stagiaires qui ont les yeux bleu et vert
SELECT * FROM stagiaires WHERE yeux IN ('bleu','vert');
--40-- A l'inverse maintenant, afficher les stagiaires qui n'ont pas les yeux bleu ni vert
SELECT * FROM stagiaires WHERE NOT yeux='bleu' OR yeux='vert';
SELECT * FROM stagiaires WHERE yeux NOT IN ('bleu','vert');
SELECT * FROM stagiaires WHERE yeux !='bleu' OR yeux !='vert';
--41-- récupérer tous les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations
SELECT prenom, quantite FROM stagiaires AS s LEFT JOIN manger AS m ON s.id_stagiaire = m.id_stagiaire;
--42-- récupérer que les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations
SELECT * FROM stagiaires AS s, manger AS m WHERE s.id_stagiaire = m.id_stagiaire AND m.quantite != 0;
--43-- prénom du stagiaire, le nom du bonbon, la date de consommation pour tous les stagiaires qui ont mangé au moins une fois
SELECT prenom, nom, date_manger FROM stagiaires AS s, bonbons AS b, manger AS m WHERE s.id_stagiaire = m.id_stagiaire, b.id_bonbon = m.id_stagiaire,/!\ 
--44-- Afficher les quantités consommées par les stagiaires (uniquement ceux qui ont mangé !)
SELECT stagiaires.prenon, quantite.manger FROM stagiaires AS m INNER JOIN/!\ 
--45-- Calculer combien de bonbons ont été mangés au total par chaque stagiaire et afficher le nombre de fois où ils ont mangé
SELECT manger.quantite COUNT()/!\ 
--46-- Afficher combien de bonbons ont été consommés au total
SELECT SUM(quantite) FROM manger;
--47-- Afficher le total de *Tagada* consommées
SELECT SUM(quantite) FROM manger WHERE nom = 'Tagada';/!\ 
--48-- Afficher les prénoms des stagiaires qui n'ont rien mangé
/!\ 
--49-- Afficher les saveurs des bonbons (sans doublons)
SELECT DISTINCT saveur FROM bonbons;
--50-- Afficher le prénom du stagiaire qui a mangé le plus de bonbons
/!\ 