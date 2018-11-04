<style>
    h2 {color: purple;}
</style>

<?php
//---------------------------------
echo '<h2>  --- Les balises PHP --- </h2>';
//---------------------------------
?>

<?php
// Pour ouvrire un passage en PHP on utilise la balise précédente.
// Pour fermer un passage en PHP, on utilise la balise suivante.
?>

<p>Bonjour</p> <!--En dehors des balises d'ouverture et de fermeture du PHP, nous pouvons écrire de HTML quand on est dans un fichier ayant l'extension .php -->

<?php
// Vous n'êtes pas obligé de fermer un passage en PHP en fin de script.
//---------------------------------
echo '<h2> --- Affichage --- </h2>';
//---------------------------------

echo 'Bonjour <br>'; // echo est une instruction qui permet d'afficher dans le navigateur. Toutes les instructions se termine par un point virgule. Dans un echo nous pouvons mettre aussi du HTML.
print 'Nous sommes mardi <br>';// print est une autre instruction d'affichage. Pas ou peu de difference avec echo.

 // Autres instruction d'affichage que nous verrons plus loin :
 //  => print_r();
 //  => var_dump();

 // Pour faire un commentaire sur une seule ligne.

 # autre syntaxe de commentaire sur une seule ligne.

 /*
    Pourfaire 
    un commentaire sur
    plusieurs lignes

 */

 //--------------------------------------------------------------------
echo '<h2> --- Variable / Déclaration / Affectation / Types --- </h2>';
//---------------------------------------------------------------------

// Définition : Une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. 
// En PHP on déclare une variable avec le signe $.

$a = 127; // affectation de la valeur 127 à ma variable $a.
echo gettype($a); // gettype() est une fonction prédéfinie qui indique le type d'une variable, ici il s'agit d'un integer (entier). 
echo '<br>';

$a = 'une chaine de caractère';
echo gettype($a); // affiche string.

echo '<br>';

$b = '127';
echo gettype($b); // affiche string car un nombre écrit entre quote est interprété comme un string.

echo '<br>';

$a = true;
echo gettype($a); // affiche boolean.

// Par convention un nom de variable commence ^par une lettre minuscule puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début) ou un underscore (jamais au début car signification particulière en objet) ni à la fin.

//---------------------------------------
echo '<h2>  --- Concaténation --- </h2>';
//---------------------------------------

$x = ' Bonjour ';
$y = 'tout le monde';
echo $x . $y . '<br>'; // le point de concaténation peut être traduit par 'suivi de'.
// Remarque sur echo : 
echo $x, $y, '<br>'; //Dans l'instruction echo, on peut séparer les élémznt affiché par une virgule. Cette syntaxe est spécifique au echo et ne marche pas avec print.

//-------
// Concaténation lors de l'affectation :
$prenom1 = 'Bruno';
$prenom1 = 'Claire';
echo $prenom1 . '<br>'; // Affiche Claire.

$prenom2 = 'Nicolas';
$prenom2 .= ' Marie'; // .= opérateur combiné, il prend la valeur précédente pour y ajouter une seconde valeur.
echo $prenom2 . '<br>'; // Affiche "Nicolas Marie" grâce à l'opérateur combiné. La valeur "Marie" vient se concaténé à la valeur "Nicola "sans la remplacer.

//----------------------------------------------
echo '<h2>  --- Guillemets et quotes --- </h2>';
//----------------------------------------------

$message = "Aujourd'hui";
// ou bien
$message = 'Aujourd\'hui'; // on échappe les apostrophe dans les quotes simple avec \ (alt gr + 8).
$txt = 'Bonjour';
echo "$txt tout le monde <br>";// Dans les guillemets, la variable est évalué : c'est sont contenu qui est affiché 'ici bonjour).
echo '$txt tout le monde <br>'; // Dans les quotes simple, la variable n'est pas évalué : elle est traité comme du texte brute (affiche $txt). 

//--------------------------------------------------------
echo '<h2>  --- Constante et constante magique --- </h2>';
//--------------------------------------------------------

// Une constante permet de conserver une valeur sauf que celle ci ne peut pas être modifié durant l'exécution  du ou des script. Utile pour, par exemple, conserver les parametre de connexion à la BDD sans pouvoir le modifiés une fois définis.

define('CAPITALE', 'Paris'); // ON déclare une constante avec la fonction prédéfinie define() qui s'appelle CAPITALE et prend pour valeu "Paris". Par prévention les constante sont toujours écrites en majuscules.
echo CAPITALE . '<br>'; // Affiche Paris

// Deux constantes magique

echo __DIR__ . '<br>'; // Affiche le chemin complet vers le dossier de notre fichier
echo __FILE__ . '<br>'; // Affiche le chemin complet vers le fichier (dossier  + nom du fichier).

echo '<hr>';
echo 'Exercice concatenation :';
echo '<hr>';

// Vous affichez bleu - blanc - rouge (avec les tirets) en mettant le texte de chaque tirets dans des variable : 
$couleur1 = 'Bleu ';
$couleur2 = '- Blanc - ';
$couleur3 = ' Rouge ';
echo $couleur1 . $couleur2 . $couleur3 . '<br>';

$couleur1 = 'Bleu ';
$couleur2 = 'Blanc';
$couleur3 = 'Rouge';
echo $couleur1 . ' - ' . $couleur2 . ' - ' . $couleur3 . '<br>';

$c1 = 'Bleu - ';
$c1 .= ' Blanc - Rouge';
echo $c1 . '<br>';


//--------------------------------------------------------
echo '<h2>  --- Opérateurs arithmétique --- </h2>';
//--------------------------------------------------------

$a = 10;
$b = 2;

echo $a + $b . '<br>'; // Affiche 12
echo $a - $b . '<br>'; // Affiche 8
echo $a * $b . '<br>'; // Affiche 20
echo $a / $b . '<br>'; // Affiche 5
echo $a % $b . '<br>'; // Affiche 0 ( % = le reste d'une division entière).
// 3%2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main.

//----------------------
// Opération et affectation combinées

$a = 10;
$b = 2;

$a += $b; // équivaut à $a = $a + $b, $a vaut donc au final 12.
$a -= $b; // équivaut à $a = $a - $b, $a vaut donc au final 10.
$a *= $b; // équivaut à $a = $a * $b, $a vaut donc au final 20.
$a /= $b; // équivaut à $a = $a * $b, $a vaut donc au final 10.
$a %= $b; // équivaut à $a = $a * $b, $a vaut donc au final 0.

// Exemple d'utilisation : pratique pour faire des caluls de quantités dans les paniers d"achat (+= et -=). 

//-----------------------

// Incrémenter et décrémenter : 

$i = 0;
$i++; // On ajoute 1 à $i qui vaut au final 1
$i--; // On retire 1 à $i qui vaut au final 0

$i = 0;
$k = ++$i; // La variable $i est incrémentée de 1 puis elle est retournée. On affecte donc 1 à $k.
echo '$i vaut ' . $i . '<br>'; // affiche 1
echo '$k vaut ' . $k . '<br>'; // affiche 1

$i = 0;
$k = $i++; // La variable $i est d'abord retourné puis elle est incrémentée de 1. On affecte donc 1 à $k.
echo '$i vaut ' . $i . '<br>'; // affiche 1
echo '$k vaut ' . $k . '<br>'; // affiche 0

//-------------------------------------------------------------------------
echo '<h2>  --- Structures conditionnelles - opérateurs de comparaison --- </h2>';
//-------------------------------------------------------------------------

$a = 10;
$b = 5;
$c = 2;

//------
//if...else :
if ($a > $b) { // si la condition est évaluée a TRUE on exécute les accolades qui suivent :
    echo '$a est supérieur à $b <br>';
} else { // sinon... si la condition est evalué à FALSE, on exécute le else
    echo 'Non c\'est $b qui  est supérieur à $a <br>';
}

//------
// l'opérateur AND écrit && 
if ($a > $b && $b > $c) { // si $a est superieur à $b et que dans le même temps $b est supérieur à $ c, alors on entre dans les accolades.
    echo 'Okay pour les deux conditions <br>';
}
//------
// l'opérateur OR écrit || 
if ($a == 9 || $b > $c) { // si $a est egal à 9 (opérateur == ) OU que $b est supérieur à $c, alors on entre dans les accolades.
    echo 'Okay pour au moins une des deux conditions <br>';
}

//-----
//if...elseif...else
if ($a === 8) {
    echo '$a est égal à 8 <br>';
} elseif ($a != 10) {
    echo '$a est different de 10 <br>';
} else {
    echo 'les deux conditions sont fausses <br>';
}

// Notes : on ne fait jamais suivre un else par une condition(sinon utilisé un elseif). On ne met pas de point virgule à la fin d'une condition car il s'agit s'une structure.

//----
// L'opérateur XOR : 
$question1 = 'mineur';
$question2 = 'je vote'; // exemple d'un questionnaire statistique

if ($question1 == 'mineur' xor $question2 === 'je ne vote pas') { // si seulement une des deux conditions doit être vrai (soit l'une ou soit l'autre). Si les  2 conditions sont vraies alors l'expression complete est fausse : c'est le cas ici, on entre donc dans le else.
    echo 'Vos réponses sont cohérentes <br>';
} else {
    echo 'Vos réponses ne sont pas cohérentes <br>';
}

//-----
// Forme contractée de la condition, dite ternaire :
echo ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10';
//     IF = (...) ?
//     ELSE = :...;
// dans la ternaire le "?" remplace if et le ":" remplace else. Ici, si $a est egal à 10, je fais echo du 1er string, sinon du second.

// ou encore : 
$resultat = ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10';
echo $resultat;

//-----
// comparaison en double = et en triple = : 
$varA = 1; // integer
$varB = '1'; // string

if ($varA == $varB) echo '$varA est egal à $varB en valeur uniquement <br>';
if ($varA === $varB) {
    echo '$varA est égal à $varB en valeur ET en type <br>';
} else {
    echo '$varA est différent de $varB en type <br>';
}
/* 
    =   signe d'affectation
    ==  signe de comparaison en valeur
    === signe de comparaison en valeur et en type
 */

//-----
// isset() et empty()
// Définitions : 
//isset() teste si c'est défini (si existe) et a une valeur non NULL (si le name existe)
//empty() test si c'est vide, c'est à dire : 0, string vide(''), NULL, false ou non définie

$var1 = 0;
$var2 = '';

if (empty($var1)) echo '0, vide, NULL, false ou non défini <br>'; // ici la condition est vrai car $var1 est vide au sens de empty (voir définition ci-dessus)
if (isset($var2)) echo 'existe et non NULL <br>'; // condition est vrtai car $var2 existe bien (et non NULL)

// si on ne déclare pas $var1 et $var2, la condition avec empty reste vrai car non définie mais la condition avec isset devient fausse (car la variable ne serait pas définie). 
// exemple d'utilisation : empty() pour vérifier qu'un champ de formulaire est vide. isset() pour vérifier qu'une variable existe bien avant de l'utiliser.

//----
// l'opérateur NOT écrit "!";
$var3 = 'une chaîne de caractère';
if (!empty($var3)) echo '$var3 n\'est vide<br>'; // ! pour NOT. Il s'agit d'une négation qui transforme false en true et inversement (!false vaut true et !true vaut false). Littéralement on teste si $var3 n'est pas vide.

//----
//phpinfo(); pour vérifier la version de php sur notre serveur local.

// PHP7 : entrer une valeur dans une variable si elle existe :
$var1 = $variableInconnue ?? $varAutre ?? 'valeur par défaut';
 // l'opérateur "??" indique qu'il faut prendre la première variable ou valeur qui existe : $variableInconnue n'existant pas, on passe $varAutre qui n'existe pas non plus, donc on prend la valeur par defaut pour l'affecter à $var1.

echo $var1; // affiche 'valeur par defaut'

// Utilisation : pour pré-remplir les values des formulares quand l'internaute aura saisie et envoyé des valeurs.

//-------------------------------------------
echo '<h2>  --- Condition switch --- </h2>';
//-------------------------------------------

// La condition SWITCH est une autre syntaxe du if/elseif / else quand on veut comparer une variable à une multitude de valeurs.

$couleur = 'jaune';

switch ($couleur) {
    case 'bleu': // on compare $couleur à la valeur des "case" et exécute le codequi suit les ":" si elle correspond.
        echo 'Vous aimez le bleu <br>';
        break; // break est obligatoire pour quitter la condition une fois le case exécuté.

    case 'rouge':
        echo 'Vous aimez le ropuge <br>';
        break;

    case 'vert':
        echo 'Vous aimez le vert <br>';
        break;

    default: // ca par defaut si on entre pas dans les cases précédents 'équivalent du else).
        echo 'Vous n\'aimez aucune de ces couleurs <br>';
        break;
}
echo '<hr>';
echo 'Exercice  condition :';
echo '<hr>';
//Exercice : réécrire le switch précédent en condition if... classique. On doit obtenir le même résultat.
if ($couleur == 'bleu') {
    echo 'Vous aimez le bleu <br>';
} elseif ($couleur == 'rouge') {
    echo 'Vous aimez le rouge <br>';
} elseif ($couleur == 'vert') {
    echo 'Vous aimez le vert <br>';
} else {
    echo 'Vous n\'aimez aucune de ces couleurs <br>';
}

//--------------------------------------------------------
echo '<h2> --- Quelques fonctions prédéfinies --- </h2>';
//--------------------------------------------------------

// Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le langage PHP. 

//---
//strpos : 
$email1 = 'prenom@site.fr';
echo strpos($email1, '@'); //Affiche la position  6 de @ en comptant à partir de 0.
echo '<br>';
$email2 = 'bonjour';
echo strpos($email2, '@'); // Cette ligne n'affiche rien pourtant la fonction retourne bien quelque chose : false.
echo var_dump(strpos($email2, '@')); // Grâce au var_dump on peut apercevoir ce que retourn cette fonction si '@' n'est opas trouvée. var_dump est une instruction d'affichage améliorée que l'on utilise en phase de developpement.
echo '<br>';
//----
//strlen :
$phrase = 'mettez une phrase ici à cet endroit';
echo strlen($phrase); // strlen retourne la taille d'une chaine (nombre d'octets de cette chaine, un caractère accentué valant 2 octetes).
echo '<br>';

//----
//substr :
$texte = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse itaque voluptates molestias, delectus numquam sapiente ipsum cupiditate nihil aspernatur illo inventore adipisci. Aliquam praesentium eum harum reiciendis sequi saepe fuga!';

echo substr($texte, 0, 20) . ' ...<a href=\'#`\'> Lire la suite</a>';// substr retourne une partie du string de la position 0 et sur 20 caractères.
echo '<br>';

//---
//trim :
$msg = '       Hello world     ';
echo strlen($msg) . '<br>'; // On compte la taille avec les espaces.
echo strlen(trim($msg)) . '<br>'; // On compte la taille une fois les espaces supprimé avec trim() en début et fin de string

echo '<br>';
//-----
// die() et exit()
//exit('un message'); // quitte le script après avoir affiché le message.
//die('un message'); // fait la même chose : die() est un alias de exit().

//--------------------------------------------------------
echo '<h2> --- Les fonctions  utilisateur --- </h2>';
//--------------------------------------------------------

// Les fonctions sont des morceaux de code encapsulé dans des accolades et portant un nom, qu'on appelle au besoin pour exécuter le code  qui s'y trouve.

// Déclaration d'une fonction : 
function separation()
{// déclaration d'une fonction sans paramètre
    echo '<hr>';
}

// Appel de la fonction : 
separation(); // on appel une fonction en écrivant son nom suivi d'une paire de ().

//-------
// Fonction avec parametre et return : 
function bonjour($qui)
{ // $qui apparaît ici pour la première fois : il permet de recevoir un argument, il s'agit d'une variable de reception. Notez que l'on peut mettre plusieurs ^parametres dans les parenthèses séparés par une virgule
    return 'Bonjour ' . $qui . '<br>';// return renvoie le string qui le suit à l'endroit ou est appelé la fonction.
    echo 'cette ligne ne sera pas exécutée car après un return !';
}

echo bonjour('Alpha'); // si une fonction attend un argument, il faut lui envoyer

echo '<hr>';
echo 'Exercice  fonction:';
echo '<hr>';

function appliqueTva($nombre)
{
    return $nombre * 1.2;
}

// Ecrire une fonctionTva2 qui calcule un nombre multiplié par un taux donnés lors de l'appel de la fonction : 

function appliqueTva2($nb, $taux)
{ // on peut initialiser par défaut un paramètre dans le cas ou on ne recoit pas de valeur en argument lors de l'appel de la fonction. On a renommé notre fonction car on ne peut pas déclarer deuc fonction qui porte le même nom.
    return $nb * $taux;
}
echo appliqueTva2(500, 0.5) . ' <br>';


//------
// Exercice :
function meteo($saison)
{
    echo "Nous somme en $saison . <br>";
}

meteo('automne');
meteo('printemps');

// Au sein d'une nouvelle fonction, exoMetéo, afficher l'article au ou en selon la saison (en été, en hiver, en automne, au printemps).

function exoMeteo($saison)
{
    if ($saison === 'été' || $saison === 'automne' || $saison === 'hiver') {
        echo "Nous sommes en  $saison ! .<br>";
    } else {
        echo "Nous sommes au  $saison ! .<br>";
    }
}
exoMeteo('printemps');

/*
CORECTION : 
 */
function exoMeteo2($saison)
{

    if ($saison === 'printemps') {
        $article = 'au';
    } else {
        $article = 'en';
    }

    echo "Nous sommes $article $saison <br>";
}
exoMeteo2('hiver');
exoMeteo2('printemps');

//----
// Variables locales et variables  globales :

// De l'espace local à l'espace global :
function jourSemaine()
{
    $jour = 'mardi'; // variable local à la fonction
    return $jour . '<br>'; // return permetr de sortir une valeur de la fonction 
}
 // echo $jour; // erreur car cette variable n'est connue qu'a l'interieur de la fonction
echo jourSemaine(); //  On récupère ici la valeur 'mardi' grâce au return qui se situe dans la fonction.

// De l'espace global à l'espace local :

$pays = 'France'; // variable global

function affichePays()
{
    global $pays; // le mot clef global permet de récupérer une variable global au sein de l'espace local de la fonction
    echo $pays . '<br>'; // affiche France
}
affichePays();

//--------------------------------------------------------
echo '<h2> Structures itératives : les boucles </h2>';
//--------------------------------------------------------

// Les boucles sont destinées à répéter des lignes de code de façon automatique.

// Boucle while : 

$i = 0; // valeur de départ de la boucle

while ($i < 3) { // Tant que $i est inferieur à 3, nous entrons dans la boucle
    echo " $i---"; // Affiche 0,1,2
    $i++; // On oublie pas d'incrémenter à chaque tour de boucle pour ne pas avoir une boucle infinie
}
 // Note : pas de ";" à la fin des structures itératives.
echo "<br>";

echo '<hr>';
echo 'Exercice boucle while :';
echo '<hr>';
//----
// Exercice : à l'aide d'une boucle while, afficher dans un selecteur les années de 1918 à 2018.

echo '<select>';
echo '<option>1</option>';
echo '<option>2</option>';
echo '<option>3</option>';
echo '</select><br>';
echo '<br>';
$i = 1918;
echo '<select>';
while ($i < 2019) {
    //echo "<option>$i</option> ";
    echo '<option>' . $i . '</option>';
    $i++;
}
echo '</select><br>';
// CORRECTION :
echo '<br>';
$i = date('Y') - 100; // date() fournit la date du jour au format indiqué, ici 'Y'  pour year quatre chiffres 
echo '<select>';
while ($i <= date('Y')) {
    //echo "<option>$i</option> ";
    echo '<option>' . $i . '</option>';
    $i++;
}
echo '</select><br>';
echo '<br>';
$i = 2018;
echo '<select>';
while ($i > 1917) {
    echo "<option>$i</option> ";
    $i--;
}
echo '</select><br>';
echo '<br>';
// Boucle do while :
// La boucle do while a la particularité de s'exécuter au moins une fois (correspondant à "do"), puis tant que la condition while est vraie.

$j = 1;
do {
    echo 'Je fais un tour de boucle <br>';
    $j++;
} while ($j > 10); // la condition renvoie false ici, pourtant la boucle à bien tourné une fois. Attention au ";" après le while de cette boucle
//Exemple d'utilisattion : poser une question à l'internaute avec le "do" puis tant qu'il n'a pas répondu avec le "while".
echo '<br>';

// Boucle for :
// La boucle for est une autre syntaxe de la boucle while.
for ($i = 0; $i < 10; $i++) { // on trouve dans les parenthèses du for : valeur de départ; condition d'entrée dans la boucle; variation de $i(incrémentation, décrémentation ou autre)
    echo $i . '<br>';// affiche 0 à 9 en 10 tours
}

// Rappel si l'on veut faire varier $i  de 10 en 10, on écrit $i += 10 à la place de $i++.

// Exercice : afficher 12 <option> de 1 à 12 à l'aide d'une boucle for.
echo '<select>';
for ($i = 1; $i < 13; $i++) {
    echo '<option>' . $i . '</option>';
}
echo '</select>';
echo '<br>';
//-----
// Boucle foreach : 
// Il existe aussi la boucle foreach pour parcourir les arrays et les objets. Nous la verrons dans un prochain chapitre
echo '<hr>';
echo 'Exercice for :';
echo '<hr>';
//------
// Exercice :  afficher avec une boucle for les chiffres de 0 à 9 dans une table HTML
echo '<table border="1">';
echo '<tr>';
for ($i = 0; $i < 10; $i++) {
    echo '<td>' . $i . '<td>';
}
echo '</tr>';
echo '</table>';
echo '<hr>';
echo '<br>';
// EXercice : Faite une boucle for qui affiche 0 à  9 sur une ligne, répéter sur 10 ligne, dans une table HTML
echo '<table border="1">';
echo '<tr>';
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 10; $j++) {
        echo '<td>' . $j . '<td>';
    }
    echo '</tr>';
}
echo '</table>'; // nous avons ici le principe des boucles imbriquées. Quand la 1ère boucle fait 1 tour, la boucle interieur en fait 10.

//--------------------------------------------------------
echo '<h2> Les tableaux ou array </h2>';
//--------------------------------------------------------
// Un tableau ou array est déclaré comme une variable améliorée dans laquelle on stock une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type. Elles possèdent un indice dont la numérotation par défaut commence à 0.

// Déclaration d'un array (methode 1) :

$liste = array('Grégoire', 'nathalie', 'Emilie', 'François', 'Georges');
echo 'Le type de $liste est : ' . gettype($liste) . '<br>'; //  affiche le type array
// echo $liste; // erreur de type "Array to string conversion" car on ne peut pas afficher directement un array avec un echo;
echo '<pre>';
var_dump($liste); // affiche le contenu du tableau  plus certaines information comme le type
echo '</pre>'; // pre est une balise HTML qui permet de formater l'affichage du var_dump

echo '<pre>';
print_r($liste); // print_r est plus synthétique que var_dump, il n'affiche pas le type des éléments contenus dans l'array
echo '</pre>';

// fonction d'affichage d'un print_r avec balise  pre :
function debug($param)
{
    echo '<pre>';
    // print_r($param);
    var_dump($param);
    echo '</pre>';
}

// Autre methode de déclaration d'un array :
$tab = ['France', 'Italie', 'Espagne', 'Portugal'];
$tab[] = 'Suisse'; // les crochets vide permettent d'ajouter une valeur à la fin de votre array.
debug($tab);

// Afficher Italie à partir de notre tableau $tab :
echo $tab[1] . '<br>';

//-----
// Tableau associatif : 
//Un tableau associatif est un tableau dans lequel on choisit la dénomination des indices.

$couleur = array(
    'j' => 'jaune',
    'b' => 'bleu',
    'v' => 'vert'
);
// Pour accéder à un élément du tableau associatif :
echo 'La seconde couleur de notre tableau est le : ' . $couleur['b'] . '<br>';
echo "La seconde couleur de notre tableau est le :  $couleur[b]<br>"; // Un array écrit dans des guilllemets ous de quotes perd les quotes autour de son indice

//Mesurer la taille d'un array :
echo 'Taille du tableau $couleur : ' . count($couleur) . '<br>';
echo 'Taille du tableau $couleur : ' . sizeof($couleur) . '<br>'; // count() et sizeof() font la même chose : ils comptent le nombre d'éléments contenus dans l'array indiqué.

//--------------------------------------------------------
echo '<h2> Boucle foreach </h2>';
//--------------------------------------------------------

// La boucle foreach est un moyen simple de passer en revue un tableau ou un objet. Elle retourne une erreur si vous tentez de l'utiliser sur autre chose. 
debug($tab);
foreach ($tab as $valeur) { // le mot clef "as" fait parti de la structure syntaxique de la foreach : il est obligatoire. $valeur vient parcourir la colonne des valeurs de l'array. Notez qu'on peut l'appeler comme on veut : c'est sa place après "as" qui détermine qu'elle parcours les valeurs
    echo $valeur . '<br>'; // on affiche succéssivement les éléments du tableau à chaque tour de boucle. La foreach s'arrête automatiquement à la fin du tableau.
}

foreach ($tab as $indice => $valeur) { // quand il y a 2 variables après "as", la première parcours la colonne des indices (quelque soit son nom) et la deuxième parcours la colonne des valeur (quelque soit son nom).
    echo $indice . ' correspond à  ' . $valeur . '<br>';
}
echo '<hr>';
echo 'Exercice foreach :';
echo '<hr>';
// Exercice : écrivez un array associatif avec les indice prenom, nom, email et telephone  et mettez y  des information pour une personne. Puis avec une boucle foreach affichez les valeurs dans des paragraphe sauf pour le prénom qui doit être dans un h3.

$user = array(
    'prenom' => 'Alpha',
    'nom' => 'DIALLO',
    'email' => 'alpha.diallo@lepoles.com',
    'telephone' => '0101010101'
);
debug($user);

foreach ($user as $info => $values) {
    if ($info == 'prenom') {

        echo '<h3>' . $info . ' :  ' . $values . '</h3>';
    } else {
        echo '<p> ' . $info . ' :  ' . $values . '</p>';
    }
}

//--------------------------------------------------------
echo '<h2> Array multidimensionnel </h2>';
//--------------------------------------------------------

// Nous parlons de tableau multidimensionnel quand un tableau est contenu dans un autre tableau. Chaque tab leau représente une dimension.

// Création d'un array multidimensionnel : 
$tab_multi = array(
    0 => array(
        'prenom' => 'Julien',
        'nom' => 'Dupont',
        'telephone' => '0606060606'
    ),
    1 => array(
        'prenom' => 'Nicolas',
        'nom' => 'Duran',
        'telephone' => '0707070707'
    ),
    2 => array(
        'prenom' => 'Pierre',
        'nom' => 'Dulac'
    ),
); // Il est possible de choisir le nom des indices dans cet erray multidimensionnel.
debug($tab_multi);
// Acceder à la valeur "Julien" dans cet array
echo $tab_multi[0]['prenom'] . '<br>'; // Nous entrons d'abord à l'indice 0 de $tab_multi, pour ensuite aller à l'indice ['prenom']dans le sous tableau.
echo '<hr>';
echo 'Exercice :';
echo '<hr>';
//Parcourir le tableaumultidimensionnel avec une boucle for :
    // Possible car les indices sont numériques.
// debug($tab_multi);
for ($i = 0; $i < count($tab_multi); $i++) {
    echo $tab_multi[$i]['prenom'] . '<br>';
}
echo '<hr>';
// Exercice : Afficher les 3 prénoms avec une boucle foreach :

foreach ($tab_multi as $index => $items) {
    echo $items['prenom'] . '<br>';
}
echo '<br>';
foreach ($tab_multi as $items) {
    echo $items['prenom'] . '<br>';
}
echo '<hr>';
// Afficher toute les valeurs de l'array $tab_multi.
foreach ($tab_multi as $sous_tableau) {
    // debug($tab_multi);
    // debug($sous_tableau);
    foreach ($sous_tableau as $info) { // $sous_tableau étant lui même un array, on le parcours aussi avec une foreach
        echo $info . '<br>'; // $info correspond au valeur de sous_tableau
    }
    echo '<br>';
}
//--------------------------------------------------------
echo '<h2> Inclusion de fichier </h2>';
//--------------------------------------------------------
echo 'Première inclusion : ';
include 'exemple.inc.php'; // le fichier dont le chemin est spécifier est inclus ici.  En cas d'erreur lors de l'inclusion du fichierinclude génère une erreur de type "warning" et continu l'exécusion du script. 
echo '<br> ';
echo 'Deuxième inclusion : ';
include_once 'exemple.inc.php'; // le once vérifie si le fichier à déjà été inclus (avant), si c'est le cas il ne le ré-inclus pas.
echo '<br> ';
echo 'Troisième inclusion : ';
require 'exemple.inc.php'; // le fichier est "requis" donc OBLIGATOIRE : en cas d'erreur lors de l'inclusion du fichier, require génère une erreur de type "fatal error" et stoppe l'exécution du script.
echo '<br>';
echo 'Quatrième inclusion : ';
require_once 'exemple.inc.php'; // le once vérifie si le fichier à déjà été inclus (avant et après), si c'est le cas il ne le ré-inclus pas.

// Le "inc" dans le nom du fichier inclus est indicatif pour préciser au développeurs qu'il s'agit d'un fichier d'inclusion et donc pas d'une page à part entière. Ce n'est pas obligatoire mais utile.
//--------------------------------------------------------
echo '<h2> Gestion des dates </h2>';
//--------------------------------------------------------

echo date('d/m/Y H:i:s') . '<br>';
echo date('d-m-Y H/i/s') . '<br>'; // date retourne la date de maintenant selon le format indiqué. d=> jour / m => mois / Y => année sur 4 chiffres / y => année sur 2 chiffres / H => heure sur 24h / h => heure sur 12h / i => minute / s => seconde.

echo date('Y-m-d') . ' date(\' Y - m - d \') <br>'; // on peut changer l'ordre des paramètres ainsi que le séparateur.

//------
// Le timestamp :
// Définition : le timestamp est le nombre de seconde écoulé entre une certaine date et le 1 er janvier 1973 à 00:00:00. Cette date correspond à la création du système UNIX.
// Ce système de timestamp est utilisé par de nombreux langages de programation diont le PHP et le JS. 

//----
echo time() . ' en timstamp <br>'; // Retourne l'heure actuelle en timestamp.

//----
//Changer le format d'une date (méthode procédurale):
$dateJour = strtotime('27-09-2018'); // transforme la date exprimé en string en timestamp.
echo $dateJour . ' utilisation de strtotime() <br>'; // affiche le timstamp du jour.

var_dump(strtotime('13-13-2018')); // ici retourne false car la date fournie n'est pas valide. Cette fonction permet donc de valider une date.
echo '<br>';
$dateFormat = strftime('%Y-%m-%d', $dateJour); // transforme une date donnée en timestamp selon le format indiqué, ici en année-mois-jour
echo $dateFormat . ' conversion méthode procédural <br>';
echo '<hr>';
//----
// Changer le format d'une date (méthode objet) :
$date = new DateTime('11-04-2017'); // $date est un objet date qui représente le 11-04-2017.
echo $date->format('Y-m-d') . ' conversion méthode objet <br>'; //on peut formater cet objet date en appelant sa methode format() et en lui indiquant les paramètres du formate, ici 'Y-m-d'. Affiche '20177-04-11'. 

//-------------------------------------------------------
echo '<h2> Introduction aux objets</h2>';
//-------------------------------------------------------

// Un objet est un autre type de donnée. Il représente un objet du réel(par exemple : une voiture, un meuble, un personnage, etc...) auquel on peut associer des caractéristiques appelées propriétés (ou attributs), ainsi que des fonctions pour faire des opération appeleées méthode.

// Pour créer un objet, il nous faut un "plan de construction" : c'est le rôle de la classe. Nous créons ici une classe pour fabriquer des objets meubles :

class Meuble
{ // On met une majuscule au nom des classes
    public $marque = 'ikea'; // $marque est une propriété. "public" pour dire quelle est accessible à l'exterieur de la classe.
    public function prix()
    { // prix est une methode
        return rand(50, 200); // choicsit un entier aléatoirement entre 50 et 200.
    }
} // cette classe est un "plan de construction" d'objet" meuble" qui pourront utiliser la propriété $marque et la méthod prix().

//Puis nous créons une table à partir de cette classe :

$table = new Meuble(); // new est un mot clef qui permet d'instancier la classe meuble pour en faire un objet $table. On dit que "$table" est une instance de "Meuble".
debug($table); // Affiche le type "object", la classe Meuble dont il vient et sa propriété $marque.

echo 'La marque de ma table est  : ' . $table->marque . ' <br>'; // Pour accéder à la propriété  d'un objet, on écrit l'objet suivi d'une flèche "->" suivi du nom de la propriété sans "$".

echo 'Le prix de ma table est  : ' . $table->prix() . ' € <br>';// Pour accéder à la méthode  d'un objet, on écrit l'objet suivi d'une flèche "->" suivi du nom de la méthode avec une paire de "()".


//------------------------- FIN DU FICHIER -------------------------------