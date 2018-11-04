// alert('js ready');
/* 1- le ET : && ou AND */
/* 2- le OU : || ou OR ou AND */
/* 3- le ! (contraire de ) */

/* 1- le ET : && ou AND */
/*
=> Si je cumule plusieurs conditions 
 */
var prenom = "alpha";
var prenomLog = prompt('prénom');
var mdp = 123;
var mdpLog = parseInt(prompt('mdp'));

if((prenom === pronomLog) && (mdp === mdpLog)){
    /* ...code  si TOUT est vrai */
}
/* Tables des &&
if(A && B){...}

=> si A est Faux et B est Vrai => FAUX
=> si A est Vrai et B est Faux => FAUX
=> si A est Faux et B est Faux => FAUX
=> si A est Vrai et B est Vrai => VRAI
*/

/* 2- le OU : || ou OR ou AND */
/* 
=> Si au moins une condition est Vrai
*/

/* 
TABLE des ||

=> si A est Faux et B est Vrai => VRAI
=> si A est Vrai et B est Faux => VRAI
=> si A est Faux et B est Faux => FAUX
=> si A est Vrai et B est Vrai => VRAI
*/

/* 3- le ! (contraire de ) */
var userLog = true;
if(userLog == false){
    /* ...code si user non Loggé */
}

if(!userlog){
    /* ...code si user non Loggé */
}