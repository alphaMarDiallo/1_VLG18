<?php
require_once('namespace_ab.php');
// erreur : On ne peut pas déclarer deux fonction avec le même nom
// function test(){};
// function test(){};
echo A\ville();
echo '<br>';
echo A\strlen();
echo '<hr>';
echo '<hr>';
echo B\ville();
echo '<br>';
echo B\strlen();
//---------------------------------------------------
/*
Les namespace permettent de classer mes 'class'
Pratique pour classer les fonctions
Evite à plusieurs développeur travaillant ensemble de rentrer en collision lors d'un nommage d'une méthode ou d'une classe 
*/