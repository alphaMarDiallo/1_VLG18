/********************************** 
  INCREMENTATION & DECREMENTATION
**********************************/

// ## ~ Incrementation ~ ## //

var nb1 = 1;
nb1 = nb1 + 1;
// Ecriture simplifié
nb1++;

// ## ~ Décrementation ~ ## //

var nb1 = 1;
nb1 = nb1 - 1;
// Ecriture simplifié
nb1--;

// ## ~ Subtilité ~ ## //

nb1 = 0;
console.log(nb1++); // Affiche la variable avant l'incrémentation

nb1 = 0;
console.log(++nb1); // Incrémente avant d'afficher la variable