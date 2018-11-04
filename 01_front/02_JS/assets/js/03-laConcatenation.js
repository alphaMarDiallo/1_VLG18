/*--------------------------- 
        LA CONCATENATION
---------------------------*/

var debutdePhrase = "Aujourd'hui";
var DateDuJour = new Date();
var suitedePhrase = ", son présent";
var NombreDeStagiaire = 10;
var FindePhrase = "apprenants.<br>";

document.write(debutdePhrase + ' ' + DateDuJour.getDate() + '/' + (DateDuJour.getMonth() + 1 ) + '/' + DateDuJour.getFullYear() + suitedePhrase + ' ' + NombreDeStagiaire +' ' + FindePhrase);

