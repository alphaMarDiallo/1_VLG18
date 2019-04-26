<?php
// Déclaration des zone de widget :

function eprojet_init_widgets()
{

    register_sidebar(array(
        'name' => 'Region entête', // nom qui apparaît dans le BO
        'id' => 'region-entete', // id de la zone pour pouvoir l'insérer dans un template
        'description' => 'Ajoute des widgets à l\'entête de la page d\'accueil', // description qui apparaîty dans le BO
        'before_widget' => '', // pour retirer les balises <li> par défault avant le widget
        'after_widget' => '', // pour retirer les balises <li> par défault après le widget
        'before_title' => '<h1>', //pour mettre le titre du widget dans un <h1> au lieu d'un <h2> par défaut
        'after_title' => '</h1>',

    ));

    register_sidebar(array(
        'name' => 'Colonne de droite',
        'id' => 'colonne-droite',
        'description' => 'Ajoute des wuidgets à la barre latérale de droite',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'Région footer gauche',
        'id' => 'footer-gauche',
        'description' => 'Ici on peut mettre un widget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    ));

}

add_action('widgets_init', 'eprojet_init_widgets'); // j'exécute ma fonction nommée  "eprojet_init_widget" lors de l'initialisation des widget par le core de WP : "widgets_init" s'appelle un HOOK car y sont accroché les fonctions du core WP ainsi que la notre. Elles s'exécutent ensemble lors de l'exécution de se HOOK.

// Déclaration des zones de menu :

function eprojet_init_menus()
{

    register_nav_menu('primary', 'menu principal'); // crée une zone de menu d'id "primary" et de nom "menu principal" dans le BO

    register_nav_menu('secondary', 'Région footer gauche');
};

add_action('init', 'eprojet_init_menus'); // on exécute notre fonction "eprojet_init_menus" dont le HOOK appelé "init" du core de WP
