/******************************************************************** 
                            LES EVENEMENTS

Les événements vont me permettre de déclancher une fonction, c'est à dire, une série d'instruction ; suite à une instruction de mon utilisateur.

OBJRCTIF => Etre en mesure de capturer ces événements afin d'exécuter une fonction.

Les Evenements : MOUSE (souris)

    click           :       au clic sur l'élément
    mouseenter      :       la souris passe au dessus d'un élément
    mouseleave      :       la souris sors de l'élément
    mouseover       :       au passage de la souris

cf : https://developer.mozilla.org/fr/docs/Web/API/MouseEvent


Les Evenement clavier : KEYBOARD (clavier)

    keyup           :       une touche du clavier a été relaché
    keydown         :       une touche du clavier a été enfoncé

cf : https://developer.mozilla.org/fr/docs/Web/API/KeyboardEvent



Les Evenement clavier : WINDOW (fenêtre)

    scroll          :      défilement de la fenêtre
    resize          :      redimentionnement de la fenêtre

cf : https://developer.mozilla.org/en-US/docs/Web/API/Window/event



Les Evenement FORM (formulaire)

    change         : pour les éléments <input>, <select> et <textaera>
    submit         : à l'envoi(soumission) du formulaire
    input          : pour capter la saisie d'un utilisateur sur un                     champ <input>

##################### LES ECOUTEURS D'EVENEMENTS #####################

Pour attacher un événements a un élément, ou autrement dit, pour déclancher un écouteur d'évenemrnt qui se chargera de déclancher une fonction, je vais utiliser la syntaxe suivante : 

********************************************************************/

var p =document.getElementById('monParagraphe');

function changeLaCouleurEnRouge(){
    p.style.color = "red";
}

p.addEventListener('mouseover ', changeLaCouleurEnRouge);

/* -------------------------------------------------------------\
|                       EXERCICE PRATIQUE                       |
| A l'aide de javascript, créez un champ "input" type text avec |
| un ID unique. Affichez ensuite dans une alerte, la saisie de  |
| l'utilisateur.                                                |
|______________________________________________________________*/

//  je créer ma balise
var input = document.createElement('input');
// je créer mon ID et le type
input.id = 'monInput';
input.type='text';
// j'integre dans le body
document.body.appendChild(input);

// je cible le contenu de l'input
// var getUser = input.textContent;
// console.log(getUser);
function getUserInput(){
    alert(input.value);
}
input.addEventListener('change',getUserInput);

/*********************************************************************                              CORRECTION 
// -- Création du champ input
var input = document.createElement('input') ;
input.type = "text";
input.id = "monID";
input.setAttribute("placeholder", "Saisissez un contenu...");

// -- Ajout dans la page
document.body.appendChild(input);


  On écoute l'évènement "change" sur le champ "input"
  et on execute la fonction "displayUserInput"
 
function displayUserInput() {
    alert(input.value);
}

input.addEventListener('change', displayUserInput);

*********************************************************************/
