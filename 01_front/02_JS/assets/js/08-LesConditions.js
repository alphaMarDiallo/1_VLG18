/*********************** 
    LES CONDITIONS
***********************/

// var majoriteLegaleFR = 18;

// if(14 >=  majoriteLegaleFR ){
//     alert('Bienvenue');
// }
// else{// LE ELSE N'EST PAS OBLIGATOIRE !
//     alert('Va voir chez Google si----');
// }

// EXERCICE


// function allowed(){
//     var info = parseInt(prompt("Your age : " ));
//     if(info > 21){
//         alert('Welcome ! on our wonderfull website');
//     }
//     else{
//         document.location.href="https://www.google.com/";
//     }
// }
// allowed();

/* 
COORECTION


// -- 1. Déclarer la majorité
const MAJORITELEGALEFR = 18;

// -- 2. Vérifier si l'utilisateur est majeur (fonction)
function monUtilisateurEstMajeur( age ) {
    if( age >= MAJORITELEGALEFR ) {
        return true;
    } else {
        return false;
    }
}

// -- 3. Je demande à l'utilisateur son age
var age = parseInt(prompt("Bonjour, Quel age avez-vous ?","<Saisissez votre Age>"));

// -- 4. Vérification
if( monUtilisateurEstMajeur( age ) ) {
    
    alert("Bienvenue sur mon site internet réservé aux majeurs");
    document.write("0_0 !!!");

} else {
    // -- 5. Redirection
    document.location.href = "http://fr.lmgtfy.com/?q=Majorit%C3%A9+L%C3%A9gale+en+France";
    
}
*/

/******************************************************************** 
                 LES OPERATEURS DE COMPARAISON

L'Opérateur de comparaison " == " signifie : Egal à.
Il permet de vérifier que 2 valeurs sont identiques.

L'Opérateur de comparaison " === " signifie : Strictement egal à.
Il va comparer la valeur, mais aussi le type!.

L'Opérateur de comparaison " != " signifie : Different de.
L'Opérateur de comparaison " !== " signifie : Strictement different de.

**********************************************************************/

/* -------------------------------
            EXERCICE :
J'arrive sur un Espace Sécurisé au moyen 
d'un email et d'un mot de passe.

Je doit saisir mon email et mon mot de passe afin d'être authentifié sur le site.

En cas d'échec une alert m'informe du problème.
Si tous se passe bien, un message de bienvenue m'accueil.
-------------------------------- */

// // -- BASE DE DONNEES
var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

var eMail = prompt('Votre mail.fr : ' );
var monMdp = prompt('Votre mdp');

function login(eMail, monMdp){
    if((eMail === email) && (monMdp === mdp)){
        return true;
    }
    else{
        return false;
    }
}
if(login(eMail,monMdp)){
    alert("Bienvenue sur votre espace");
}
else{
    alert("Email ou Mot de passe incorrecte !");
}

// // -- BASE DE DONNEES
var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

// // -- 1. Demander a l'utilisateur son email
var emailUser = prompt("Bonjour, Quel est votre adresse email ?","<Saisissez votre email>");

var mdpUser = prompt("votre mot de passe ?","<Saisissez votre mot de passe>");

// -- Exemple SANS les fonctions

// // -- 2. Je vérifie si l'email saisie correspond avec celle dans la BDD
// if ( emailUser === email && mdpUser === mdp ) {

// // -- 3. Tous est ok
// alert("Bienvenue " + emailUser + " !");

// } else {
// // -- 4. Erreur au niveau de l'identification.
// alert("ATTENTION, email / mot de passe incorrect.");
// }

// -- Exemple AVEC une fonction

// function login( emailUser, mdpUser ) {
//     return emailUser === email && mdpUser === mdp;
// }

// if ( login( emailUser, mdpUser ) ) {
//     alert("Bienvenue " + emailUser + " !");
// } else {
//     alert("ATTENTION, email / mot de passe incorrect.");

/**********************************************************************
                    LES OPERATEURS LOGIQUES

    L'Opérateur ET : &&. Si la combinaison email et emailUser correspond, ET la combinaison mdpUser et mdp correspond.

    --> Dans cette condition, les 2 doivent OBLIGATOIREMENT correspondre pour être validée.
    Ex. if(emailUser === email && mdpUser === mdp){---}

    L'Opérateur OU : ||. Si la combianaison email et emailUser correspond, ET/OU la combinaison mdpUser et mdp correspond.

    --> Dans cette condition, au moins l'une des deux doit correspondre pour être validée.
    Ex.if(emailUser === email || mdpUser === mdp){---}

    # L'Opérateur "!" : ou encore NOT.
    Il signifie le CONTRAIRE DE

    Ex.
    var monUtilisateurEstApprouve = true; 
    if(!monUtilisateurEstApprouve){---}
    Si mon utilisateur n'est pas approuvé

    Reviens à écrire
    if(!monUtilisateurEstApprouve === false){---}

    https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Op%C3%A9rateurs/Op%C3%A9rateurs_logiques

 *********************************************************************/