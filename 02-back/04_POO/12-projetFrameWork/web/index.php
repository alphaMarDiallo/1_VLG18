<?php
require_once __DIR__ . '/../vendor/Autoload.php';
// var_dump(__DIR__);

//Exemple de test :
//test1 : ------------------------------------------------------
// $emp = new Entity\Employe;

// var_dump($emp);
// $emp->setPrenom('marco');
// echo '<br>';
// echo $emp->getPrenom();

// //test2 : ------------------------------------------------------
// $pdom = Manager\PDOManager::getInstance();

// var_dump($pdom);
//test2 : ------------------------------------------------------
$er = new Manager\EntityRepository;
// var_dump($er);

$result = $er->findAll();
var_dump($result);
