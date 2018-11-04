/******************************************************* 
            LA MANIPULATION DES CONTENUS
 *******************************************************/

 l = e => console.log(e);
 //var l =function(e){ console.log(e)} 


 // -- Je souhaite récupérer mon lien Google .... Comment procéder ? 

 const GOOGLE = document.getElementById('google');
 l(google);

 // -- Je souhaite acceder aux informations de ce lien

    // -- A : le lien vers lequel pointe la balise
    l(google.href);

    // -- B : l'ID de la balise
    l(google.id);

    // -- C: La classe de la balise
    l(google.className);

    // -- D: Le texte de la balise
    l(google.textContent);

/* 
Je souhaite modifier le texte de mon lien
*/

google.textContent = "Mon lien vers GooOooOogle. !";

/* ------------------------------------------------ 
        AJOUTER UN ELEMENT DANS MA PAGE
 ------------------------------------------------*/

 /* 
 Nous allons procéder en deuc étapes : 

    1. La fonction document.creatElement() va permettre de générer un nouvel élément dans le DOM ; que je pourrai modifier par la suite avec les méthodes que nous venons de voir...

    PS : Ce nouvel élément est placé en mémoire ! 

    2. L'ajouter à la page.

 */

 // -- Définition de l'élément 
  var span = document.createElement('span');

  // -- Si je souhaite lui donner un ID
    span.id = 'monSpan';

  // -- Si je souhaite lui donner du contenu
    span.textContent = 'Mon Beau Texte en JS';

  // -- Je l'ajoute à la page
    google.appendChild(span);

/* -------------------------------
            EXERCICE
En partant du travail déjà réalisé sur la page.
Créez directement dans la page une balise <h1></h1> ayant comme contenu : 
"Titre de mon Article".

Dans cette balise, vous créerez un lien vers une url de votre choix.
BONUS : Ce lien sera de couleur Rouge et non souligné.
-------------------------------- */

// var baliseH1 = document.createElement('h1');
// baliseH1.id = 'bg-h1';
// baliseH1.textContent = 'Titre de mon Article';
// document.getElementById('bg-h1').style.color='red';
// document.getElementById('bg-h1').style.textDecoration='none';

    // je créer mes balise :
var h1 = document.createElement('h1');
var a = document.createElement('a');

    //  je créer mes contenus :
a.textContent = 'Titre de mon Article';
a.href= 'https://www.mad-movies.com';

    // J'insère la bilise a dans la balise h1 :
h1.appendChild(a);

    // Je l'ajoute à ma page :
document.body.appendChild(h1);

    // je'ajoute du style :
a.style.color = "red";
a.style.textDecoration ='none';