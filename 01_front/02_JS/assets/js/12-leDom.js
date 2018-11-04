/******************************************************************* 
                                 DOM

Le DOM est une interface de développement en JS pour HTML. Grâce au DOM, je vais être en mesure d'accéder / modifier mon code HTML.

L'Objet "document" : c'est le point d'entrée vers mon contenu HTML.
Chaque page chargé dans mon navigateur a un objet document.

*******************************************************************/

/********************************************************************* 
    Comment pui-je faire pour récupérer les differentes informations de ma page HTML ? :


-------------------------------------------------------------------
                    document.getElementById()

document.getElementById() est une fonction qui va permettre de récupérer un élement HTML à partir de son identifiant unique ID


*********************************************************************/
let bonjour = document.getElementById('bonjour');
console.log(bonjour);

/*********************************************************************

                    document.getElementsByClassName()

document.getElementsByClassName() : c'est une fonction qui va permettre de récupérer un / plusieurs éléments (une liste) HTML à partir de leur classe.

*********************************************************************/
let contenue = document.getElementsByClassName('contenue');
console.log(contenue);
// -- ⚠️ renvoi un tableau JS mes éléments HTML ⚠️

/*********************************************************************

                    document.getElementsByTagName()

document.getElementsByTagName() : c'est une fonction qui va permettre de récupérer un / plusieurs éléments (une liste) HTML à partir de leur balise.

*********************************************************/
const P = document.getElementsByTagName('p');
console.log(P);

// NOTA BENE : https://developer.mozilla.org/fr/docs/Web/API/Document/querySelector