<?php
// créer un formulaire avec les champs ville, code posta et une zone de texte adresse.
// vous affichez les données saisies par l'internaute dans la page formulaire2-traitement.php

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_POST</title>
</head>
<body>
<form method="POST" action="formulaire2-traitement.php">
<fieldset style="width: 10vw;">
<legend>Formulaire 2</legend>
    <label for="ville">Ville</label>
    <br>
    <input type="text"  id="ville" name="ville">
    <br>
    <label for="cp">Code postal</label>
    <br>
    <input type="text"  id="cp" name="cp">
    <br>
    <label for="adresse">Adresse</label>
    <br>
    <textarea name="adresse" id="adresse" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Envoyer" style="background-color:green; color:#fff;">
</form>
</fieldset>
</body>
</html>