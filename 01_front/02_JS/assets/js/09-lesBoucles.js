/****************************** 
            LES BOUCLES
 ******************************/

/* 
Pour i = 0; Tant que i est strictement inférieur ou égale à 10; alors j'incrément de 1.
*/
for (let i = 0; i < 10; i++) {
   document.write('<p>Instruction executée ; <strong> ' + i + '</strong>');
}

document.write('<hr>');

// -- Avec la  boucle WHILE

var j = 1;
while (j <= 10) {
   document.write('<p>Instruction executée : <strong> ' + j + '</strong>');
   // -- ATTENTION A NE PAS OUBLIER L'INCREMENTATION !
   j++;
}
document.write('<hr>');

var Prenoms = ['Jean', 'Marc', 'Matthieu', 'Luc', 'Pierre', 'Paul', 'Hugo', 'Jacques'];

/**
 * CONSIGNE : Grâce à une boucle FOR, affichez la liste des prénoms
 * du tableau ci-dessus dans la console, ou sur votre page.
 */

for (let i = 0; i <= Prenoms.length; i++) {
   document.write('<br><br>' + Prenoms[i] + '<br>');
}

var j = 0;
while (j < Prenoms.lengh) {
   console.log(Prenoms[j]);
   j++;
}

Prenoms.forEach(afficheUnPrenom);

// -- ATTENTION A LA PERFORMANCE 

function afficheUnPrenom(prenom, i) {
   console.log(i + ' ' + prenom);
}