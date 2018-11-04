<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Blog jquery</title>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <form action="" method="POST" id="form">
                    <div class="form-group">
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="categorie" id="categorie" class="form-control" placeholder="Catégorie">
                    </div>
                    <div class="form-group">
                        <textarea type="text" name="contenu" id="contenu" class="form-control" placeholder="Contenu"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="enregistrer" name="enregistrer" class="form-control btn btn-warning">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row"><div class="col-sm-12" id="resultat"></div></div>
        <div class="row"><div class="col-sm-12"id="liste_article"></div></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('form').on('submit', function(e){ // lors de la validation du formulaire

                e.preventDefault(); // on bloque la validation du formulaire

                var fichier = 'ajax.php'; // le fichier cible
                var params = $('#form').serialize(); // les informations du formulaires

                // Ajout d'un paramètre pour décider, côté php, si on enregistre ou si on récupère les articles
                // params = params + '&mode=enregistrer';
                params +='&mode=enregistrer';


                console.log(params);

                $.post(fichier, params, function(reponse){
                    $('#resultat').html(reponse.message);
                    $('#form').trigger("reset"); // on vide les champs du formulaire.
                },'json');//fin  $.post(fichier, params, function()

            });// fin  $('form').on('submit', function(e)


            //ajax pour récupérer la liste des article selon un timer :
            setInterval(liste_article,5000);

                function liste_article(){
                    $.post('ajax.php', 'mode=afficher', function(reponse){
                        console.log(reponse);
                        $('#liste_article').html(reponse.message);
                    }, 'json');//FIN function liste_article()

                }// FIN setInterval(liste_article,50001)


        });// FIN  $(document).ready(function()
    </script>
  </body>
</html>
