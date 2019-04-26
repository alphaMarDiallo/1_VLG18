// alert("mon fichier JS fonctionne !");

// Deux slaches pour un commentaire sur une ligne
/* 
    Ici commentaire 
    sur 
    plusieur lignes

    shiht+alt+a
*/

// -- 1 : Déclarer une variable JS
var Prenom;

//  -- 2 : Affecter une valeur
var Prenom = "Alpha";

//  -- 3 : Afficher la valeur de la variable dans la console
console.log(Prenom);

/*--------------------------------------
        LES TYPES DES VARIABLES
--------------------------------------*/

// -- typeof, me permet de connaitre le type de ma variable
console.log(typeof Prenom);

// -- Déclaration et affectation d'un nombre
var Age = 40;

// -- Connaitre son ntype
console.log(typeof Age);

/*--------------------------------------
        LA PORTEE DES VARIABLES
--------------------------------------*/

/* 
Les variables déclarés directement à la racine du fichier JS son appelées : variables GLOBALES.
Elles sont disponibles / accessibles dans l'ensemble de votre document y compris dans les fonctions.

###

Les variables déclarés à l'intereiur d'une fonction sont appelées variables LOCALES.
Elles sont disponibles UNIQUEMENT dans le scope de la fonction.
*/

// -- Les variables de type FLOAT
var uneDecimal = -2.984;
console.log(typeof uneDecimal);

// -- Les Booléens
var unBooleen = false; //true
console.log(unBooleen);
console.log(typeof unBooleen);

// -- Les Constantes
/*
La déclaration CONST permet de créer une constante accessible UNIQUEMENT en lecture. Sa valeur ne pourra pas être modifiée par des réaffectations ulterieures. Une constante ne peut pas être déclarée à nouveau... 
 */
const HOST = "localhost";
const USER = "root";
const PASSWORD = "mysql";
// Je ne peux pas faire cela...
// USER = "Alpha";
// TypeofError : Assignement to constant variable.

var unNombre = "24";
console.log(unNombre);
console.log(typeof unNombre);
/* 
La fonction parseInt() pour retourner un Entier à partir de mon string
*/
unNombre = parseInt(unNombre);
console.log(unNombre);
console.log(typeof unNombre);

// -- Pour  convertir un float
unNombre = " 12.55";
unNombre = parseFloat(unNombre);
console.log(unNombre);
console.log(typeof unNombre);

// -- Pour convertir un nombre entier ou float en string
unNombre = 10;
var monString = unNombre.toString();
console.log(monString);
console.log(typeof monString);