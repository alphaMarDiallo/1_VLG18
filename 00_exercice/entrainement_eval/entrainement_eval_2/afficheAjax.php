<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=site_commerce',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8',
    )
);

$req = $pdo->query("SELECT * FROM produit");
//------------------
echo '<table class="table mt-5">';

while ($resultat = $req->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    foreach ($resultat as $indice => $valeur) {

        echo '<td>' . $indice . ' : ' . $valeur . '</td>';

    }
    echo '</tr>';
}
echo '</table>';
//-----------------

// echo '<pre>';
// print_r($resultat);
// echo '<pre>';
