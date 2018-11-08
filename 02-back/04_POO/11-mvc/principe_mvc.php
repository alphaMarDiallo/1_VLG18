<?php
/*
Structure MVC

M :Modèle => echange avec la BDD(requête SQL)
V : View => affichage et représentation des données (HTML/CSS)
C : Controller => traitement (PHP)

exemple :
- Dans le Model : je fais ma requête SQL qui va aller récuperer tous les produits de ma BDD

- Dans le Controller : je fais  des traitement (PHP) et décide d'afficher uniquement des produits 10 par 10

- Dans la View : je présente les données (avec affichage HTML/CSS) qui sortent du traitement (Controller) issue de la requête SQL (Model)

Un seul et unique point d'entré : l'index.

 * Les front controller (FC)

 * Model                                      Model

 * BackController (BC)                        BackController (BC)

 * View                                       View

exemmple :  si un internaute clique sur un lien, il déclanche une action dans la view qui va relancer le frontController qui va choisir le backController at qui communiquera son model et la view correspondante.

//---------------------------------

Avantage : 
    - clarté de l'architecture : si le SGBD doit changer, on ouvrira juste les fichier models que le developpeur utilisera

    - si le designe doit changer, l'intégrateur ne risque pas des conflit dans les traitement du codes

    - favorise le travail collaboratif

Inconveniants : 
    - le nombre de fichiers (trop complexe pour les petites application, le temps accordé à l'architecture ne serait pas rentable sur le projet).

//-------------------------------------
schématisation de l'arborescence : 

    Models/
        - Membre
            -- connexion.html
            -- inscription.html
            -- profil.html
        - 404.html
        -haut-site.html
        -menu.html
        -bas-site.html
        -style.css

    Controllers/
        -Membre
            -- connexion.php
            -- inscription.php
            -- profil.php