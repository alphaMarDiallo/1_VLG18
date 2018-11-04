// alert("js ready");
/* comparaisons */

/* 1- comparer la VALEUR */
/* 1- comparer la VALEUR  ET le type*/
/* 3 - vérifier que 2 valeurs sont DIFFERENTES *** en valeur */
/* 4 - vérifier que 2 valeurs sont DIFFERENTES *** en valeur ET en type */

/* 1- comparer la VALEUR */
// => le signe == signifie 'égal'
//RAPPEL le = c'est pour l'affectation (stockage de données dans une variable)
var nb1 = 123;
var nb2 =" 123";
console.log(nb1 == nb2);//=>TRUE

/* 2- comparer la VALEUR  ET le type*/
// => le signe === signifie STRICTEMENT égal
var nb1 = 123;
var nb2 =" 123";
console.log(nb1 === nb2);//=>FALSE

/* 3 - vérifier que 2 valeurs sont DIFFERENTES *** en valeur */
//le signe 
console.log(nb1 != nb2);//=>FALSE

/* 4 - vérifier que 2 valeurs sont DIFFERENTES *** en valeur ET en type */
//le signe !
console.log(nb1 !== nb2);//=>TRUE
/* -----------------------
EXERCICE
 -------------------------*/
var pseudo = 'padawan';
var MDP = 123456;
var utilisateur = prompt('votre pseudo : ');

if(utilisateur === pseudo){
    var utilisateur2 = parseInt(prompt('votre mot de passe'));
    // parseInt pour que le prompt stock bien des chiffres
    if(MDP === utilisateur2 ){
        alert('bienvenue');
    }else{
        alert('Mot de passe incorrecte');
    }
}else{
    alert ('Pseudo incorrecte');
}