<?php

//1 créer une page profil avec nom et prénom
// 2 Ajouter un lien "modifier mon profil". Ce lien passe dans l'url à la page exercice.php ell-même que l'action demandée est la modification du compte.
// 3 Si la modification est demandée, c'est a dire que vous avez reçu cette info en GET, vous affichez "Vous avez demandé la modification de votre profil !".

echo '<pre>';
var_dump($_GET);
echo '</pre>';
$msg = '';
if (isset($_GET['action']) && $_GET['action'] == 'modifier') {
    $msg = '<p style="color:#fff; background-color:red;width:50%; text-align:center;"> Vous avez demandé la modification de votre profil !</p>';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice mon profil</title>
</head>
<body>
    <h1>Profil</h1>
    <?php 
    echo $msg
    ?>
    <label>Nom</label>
    <input type="text" placeholder="John">
    <label>Prenom</label>
    <input type="text"placeholder="Doe">
    <br>
    <a href="exercice.php?action=modifier">Modifier mon profil</a>
    <!-- <a href="?action=modification">Modifier mon profil</a> -->
</body>
</html>

