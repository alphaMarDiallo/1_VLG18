// alert('js ready');

/**
* EXERCICE 1
*
* Essayer de trouver comment parcourir un tableau contenant des objets
*
*/

var stagiaires = [
    {
        "prenom": "Elies",
        "code": "JavaScript"
    },
    {
        "prenom": "Mohamed",
        "code": "Html"
    },
    {
        "prenom": "Jhordan",
        "code": "Css"
    },
    {
        "prenom": "Alpha",
        "code": "Video"
    },
    {
        "prenom": "Jean-Philippe",
        "code": "Css"
    },
    {
        "prenom": "Luc",
        "code": "POO"
    },
    {
        "prenom": "Layla",
        "code": "PHP"
    },
    {
        "prenom": "Sabuj",
        "code": "Angular"
    },
    {
        "prenom": "Arnaud",
        "code": "Symfony"
    },
 
 ];

 
/*  for(var nbrStagiaire = 0; nbrStagiaire < stagiaires.length; nbrStagiaire++ ){
     console.log("stagiaire n° " + nbrStagiaire);   
 }


 console.log(stagiaires[2].code);
 console.log(stagiaires);

var nb_stagiaires = 0;
while(nb_stagiaires <= stagiaires.length){
    console.log("le nomdre de stagiaires est de : " +  nb_stagiaires);
    nb_stagiaires++;
}
console.log(stagiaires[5]); */
console.log(stagiaires.length);

for(var i = 0; i < stagiaires.length; i++){
    console.log(stagiaires[i].prenom + " adore " + stagiaires[i].code);
}

/* EXERCICE 2 */

var chiffre = parseInt(prompt("saisissez un chiffre :"));
while((chiffre < 50) || (chiffre >= 100)){
  chiffre = parseInt(prompt("saisissez un autre chiffre : "));
}