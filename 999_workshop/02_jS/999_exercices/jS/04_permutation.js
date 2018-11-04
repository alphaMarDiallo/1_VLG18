// alert("js is connected");
var nb1 = 5;
var nb2 = 3;

// nb1 = 5-2;
// console.log(nb1);
// nb2 = 3+2;
// console.log(nb2);

/* nb1=nb2;
console.log(nb1);
nb2=nb1;
console.log(nb2); */

var vide = nb1; // ici on stock la valeur de nb1 
nb1 = nb2; 
nb2 = vide;
console.log("je suis le nombre 1 avec la valeur du  nombre 2 -> " + nb1);
console.log("je suis le nombre 2 avec la valeur du  nombre 1 -> " + vide);