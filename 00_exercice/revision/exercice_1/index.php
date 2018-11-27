<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">

        <div id="retour"></div>

        <form method="POST">
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="prenomlHelp" placeholder="Prénom">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
        </div>
        <div class="form-group form-check">
            <select name="sexe" id="sexe">
                <option value="sexe">Sexe</option>
                <option value="m">homme</option>
                <option value="f">femme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="service">Service</label>
            <input type="text" class="form-control" id="service" placeholder="service" name="service">
        </div>
        <div class="form-group">
            <label for="salaire">Salaire</label>
            <input type="text" class="form-control" id="salaire" placeholder="salaire" name="salaire">
        </div>
        <button type="submit" id="submit" class="btn btn-primary mt-3" >Enregistrer</button>
    </form>

    </div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script
src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>
</html>
<!--
-important
    - Appel à Jquery
    - Id à chaque champ
    -Id submit au bouton
    - un div pour la réponse

-->
