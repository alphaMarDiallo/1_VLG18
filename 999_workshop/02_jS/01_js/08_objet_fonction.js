// alert('js ready');
/* 
OBJETS
*/
var contacts = {
    // INDICE: VALEUR
    "prenom": "Alpha",
    "nom": "DIALLO",
    "yeux": "marron"
};
console.log(contacts);
// pour cibler une valeur dans l'objet je l'appelle avec son INDICE console.log(contacts.prenom);


//Pour avoir plusieurs contacts je stocke plusieurs objets dans un tableau

var vlg18 = ["Arnaud",
             "Mohamed",
            "Ellies",
            {
                //"INDICE": VALEUR,
                "prenom": "Layla",
                "yeux": "marron"
            },
            {
                "prenom": "Luc",
                "yeux": "vert"
            },
            {
                "prenom": "Jean-Philippe",
                "yeux": "bleu"
            }
        ];
console.log(vlg18);
console.log(vlg18[1]);
console.log(vlg18[4]);
console.log(vlg18[4].yeux);


var nbVlg2018 = vlg18.length;
console.log("Nombre d'amis VLG 2018 : " +nbVlg2018);

//parcourir un tableau

var dejeuner = ["salade", "tomates", "ognions", "pain", "poulet", "barbecue", "cesar"];
/*for(i = 0; i<= dejeuner.length;);
 var compteur = 0;
 while(compteur <= dejeuner.length){
     ...code / instructions ...
     compteur++;
 } */
console.log(dejeuner[6]);

 for(menu = 0; menu < dejeuner.length; menu++){
     console.log("Aliment n° " + menu + ' ' + dejeuner[menu] );
     //console.log(dejeuner[menu]);
 }
/* 
FONCTIONS
*/

// Une fonction est une série d'instruction contenues dans des {accollades}
//elle porte le nom que je lui donne
// à chaque fois que j'en ai besoin je l'APPELLE
// je déclare une fonction avec le mot-clé function

//Une fonction anonyme ne prend aucun paramètre
    //=> elle n'utilisera pas d'information personnalisée
    function HelloTous(){
        alert("Bonjour à tous !");
    }
    // pour exécuterma fonction il faut l'appeler :
    HelloTous();

    //Une fonction avec des paramètres ou arguments
    function Pause(prenom){
        document.write("<h2>" + prenom +" "+" part en pause ! </h2>");
    }
    //j'appelle ma fonction avec un paramètre 
    Pause("Alpha");

    function ecrit(e){
        document.write("<h3>" +e+ "</h3>");
    }
    ecrit("N'importe quoi");

    /* 
    EXERCICE -Calculette
    Ecrire une fonction qui additionne 2 chiffre passés en paramètre, le mot-clé RETURN de retourner le résultat des instruction codées
    */
   function calculatrice(nb1, nb2){
    //var nb1 =prompt...=> var propre à ma fonction (elle n'existe que dans ma fonction)
    //var nb2 = rompt...=> var propre à ma fonction (elle n'existe que dans ma fonction)
    var resultat = nb1 + nb2;  
    return resultat; 
}
calculatrice(8, 4);
