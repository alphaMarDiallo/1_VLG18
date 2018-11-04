//  alert("Bonjour jS");

// 2 slashes pour un commentaire sur une ligne

/*
    commantaire
    sur
    plusieurs
    lignes
    (racourcie shift + alt + a)
*/

/*
 Le DOM ( Document Object Model) est un programme interne au navigateur qui fait en sorte que 
    => chaque balise HTML
    => chaque attribut des balises (class, id, name..)
    => chaque évènement (clic, double clic, survol de la souris,..)
deviennent des objets que l'on peut cibler, stocker dans une variable et manipuler
 */

/* 
    1. l'objet WINDOW en JS => le navigateur
        - alert("Bonjour jS"); est pareil que window.alert("Bonjour JS");
        - window est le seul objet du DOM qui peut s'utiliser implicitement (sans l'écrire)
    2. l'objet DOCUMENT en JS => la page html
        - document.getElementBy...
*/
/* ======== 1- Les variables ======== */
/* ======== 2- Les types de données ======== */
/* ======== 3- Les constantes ======== */


/* ======== 1- Les variables ======== */
/* -- 1 - Déclarer une variable */
var maVariable;

/* -- 2 - Afficher une valeur (stocker une valeur) */
maVariable = "fleur";
var maVariable = "fleur";//déclaraer + affecter

/* -- 3 - Une instruction se termine TOUJOURS par un point-virgule(;) mais je peux écrire plusieurs instructions sur la même ligne */
/* instruction_1;
instruction_2; instruction_3; instruction_4; */

/* -- 4 - Afficher une boite de dialogue */
window.alert(" Hello World !");
alert("Hello World !");

/* -- 5 - Afficher dans la console /!\ très important pour débuger son code */
console.log("Alpha");

/* -- 6 - Afficher du texte dans la page web */
document.write("VLG 2018-19 adore le JavaScript !!");

/* -- 7 - Demander une info à l'internaute */
window.prompt("On mange quand ?");
prompt("On mange quand ?");

var mangerOu = window.prompt("On mange où ?");
var mangerQuoi = prompt("On mange quoi ?");
console.log(mangerOu);
console.log(mangerQuoi);

/* -- 8 - le JS est sensible à la casse (case sensitive) */
/* 
mavariable = /= maVariable
monPrenom =/= mon_prenom
mon_nom =/= mon-mon

Ecriture camelCase
Ecriture Snake_Case
 */

 /* -- 9 - une variable
    - ne peut pas commencer par un chiffre 
    - ne doit  contenir que des caractères alphanumérique(alerte et chiffre -pas de caractère spéciaux types accents ou & ou + par ex.)
    - ne DOIT PAS être un mot réservé (var, for ... des éléments natifs du JS)
    https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Mots_r%C3%A9serv%C3%A9s

*/

/* -- 10 - une variable peut être déclarer :
    - de façon explicite : var manger = "oui";
    - ou implicite : quand = "13 heures";
*/

/* ======== 2- Les types de données ======== */
/* -- 1 - Une chaîne de caractères (string) */
var les_meilleurs = "VLG"; var les_meilleurs = 'VLG';
var les_meilleurs = "2018"; var les_meilleurs = '2018';

/* -- 2 - Un nombre entier (integer ou int) */
var les_meilleurs = 2018;

/* -- 3 - Un nombre décimal (float) */
var nb_a_virgule = -5.32;
/*
/!\ s'écrit avec un point(.)
/!\ tous les nombres peuvent être soit positifs soit négatisf
*/

/* -- 4 - Un booléan (boolean) : vrai/faux (TRUE/FALSE) */
var vrai = true;
var faux = false;

/* -- 5 - Un tableau (array) */
var gateau =["farine","oeuf","chocolat",4,true];

/* -- 6 - Un objet */
var voiture ={
    marque : "Porche",
    modele : 911,
    couleur: "gris",
    vitesse: true,
    option : ["radio","ABS","freins",4]
};
var voiture2 = {
    marque : "Porche",
    modele : 911,
    couleur: "gris",
    vitesse: true,
    option : ["radio","ABS","freins",4]
};

/* ======== 3- Les constantes ======== */

/* on la déclare une constante avec le mot CONST ses particularités:
    - elle est accessible uniquement en lecture
    - donc une fois déclarée et une valeur affectée alle ne peut plus changer
    - elle ne peut être déclarée qu'une fois dans le même script
    _par convention on écrit son nom en majuscule
*/
const PAYS = "France";

/* ======== 4- La concaténation ======== */
var annee = 2018;
var jo = 6;
var certificat_dev = "2019";

var calcul_1 = annee + jo;
document.write("<hr>" + calcul_1 + "<br>");

var calcul_2 = annee + certificat_dev;
document.write("<br>" + (calcul_2) + "<br>");

/******** EXO ***********/

var DebutPhrase = "Aujourd'hui ";
var NbStagiaires = 12;
var SuitePhrase = " stagiaires";
var FinPhrase = "sont presents";

// var PhraseComp =  DebutPhrase + NbStagiaires + "" + SuitePhrase + FinPhrase;
// document.write( "<hr>" + (PhraseComp) + "<br>");
document.write( DebutPhrase + NbStagiaires +  SuitePhrase + " " + FinPhrase);