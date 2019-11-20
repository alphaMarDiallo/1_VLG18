/**************************** 
        LES FONCTIONS
****************************/

/* 
Déclarer une fonction 
N.B : Cette fonction ne retourne aucune valeur et ne prend pas de paramètres.

*/

function bonjour() {
    alert("Bonjour !");
    // document.getElementsByTagName('body').style.bacgroundColor='red';
}
bonjour();

// function nomDeMafonction(argument 1, argument 2, argument 3, argument n){
//  Les  instructions
//}
function ditBonjour(prenom, nom) {

    document.write("Bonjour <strong>" + " " + prenom + " " + nom + " </strong> !");

}
// -- Executer une fonction avec des arguments
ditBonjour("Alpha", "DIALLO");

// Une fonction ne fait qu'une seule chose et permet d'optimiser le code

/* ----------------
    EXERCICE
    Créer une fonction permettant d'effectuer l'adittion de deux nombre (nb1 et nb2)
*/

function addition(nb1, nb2) {

    var resultat = nb1 + nb2;
    return resultat;
    //simplifié
    // return nb1 + nb2

}
document.write("<br> " + addition(21, 22));
var total = addition(53, 70);
console.log(total);
console.log(addition(63,70));