// alert("js ready");
/* ==== 1 - Les opérateurs === */
/* ==== 1 - Les écritures simplifiées === */


/* ==== 1 - Les opérateurs === */
// Je déclaremes variables / costantes en début de fichier
// je peux en déclarer plusieus à la voléd:
var nb1, nb2, resultat;

// J'affecte des valeurs à certaines variable
nb1 = 10;
nb2 = 5;

/* -- 1 - Additionner avec '+' */
resultat = nb1 + nb2;
console.log(resultat);

/* -- 2 - Soustraire avec '-' */
resultat = nb1 - nb2;
console.log(resultat);

/* -- 3 - Multiplier avec '*' */
resultat = nb1 * nb2;
console.log(resultat);

/* -- 4 - Diviser avec '/' */
resultat = nb1 / nb2;
console.log(resultat);

/* -- 5 - Le reste de la division avec le Modulo '%' */
resultat = nb1 % nb2;
console.log(resultat);

// je réaffecte un chiffre à nb1
nb1 = 11;
resultat = nb1 % nb2;
console.log('le reste de la division de ' + nb1 + ' par ' + nb2 + ' est égal à : ' + resultat);


/* ==== 2 - Les écritures simplifiées === */
var ex = 15;
ex = ex + 5;
console.log(ex);
// idem :
ex += 5; // lui même plus quelque chose
console.log(ex);

nb1 -= 5;// lui même moins quelque chose
console.log(nb1);

/*==== 3 - L'incrémentation et la décréentation ====  */
var nb1 =1;
nb1 = nb1 +1; // nb1 += 1;

nb1++; // ++ = + 1;
nb1+2; // ++ = + 2;

/* /!\ selon l'ordre le calcul  n'est pas fait au même moment */
resultat_1 = --nb1;
resultat_1 = nb1--;
resultat_1 == resultat_nb2; // => true unuquement à la fin des calculs

/* 
--nb => calcul tout de suite
nb1-- => commence à la valeur de nb1 PUIS calcule

pareil avec ++
*/

