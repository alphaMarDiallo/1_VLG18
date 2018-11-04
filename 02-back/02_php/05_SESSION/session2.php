<?php
// Ouverture ou creation d'une session : 
session_start();
echo 'La session est accesssible dans tous les scripts du site, comme ceci : <br>';
echo '<pre>';
print_r($_SESSION) . ' <br>';
echo '</pre>';
// On voit les infos de la session dans la page session1.php

// Ce fichier n'a rien avoir avec l'autre, il n'y a pas d'inclusion, il pourrait être dans un aurtre dossier, s'appeler n'importe comment.  Les fichiers contenues dans la session restent accessibles grâce au session_start().