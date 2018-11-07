<?php
$tab = array('Orange', 'Fraise', 'Poire');
$objet1 = (object) $tab; // transformation (cast)

print '<pre>';
var_dump($objet1);
print '</pre> <hr>';
// Un objet fait partis de la STDCLASS (class standard de php) lorsque celui-ci est 'orphelin' et n'a pas été instabcié par "new".

$objet2 = new stdClass();
$objet2->titre = 'PoleS';
print '<pre>';
var_dump($objet2);
print '</pre>';
echo $objet2->titre;
