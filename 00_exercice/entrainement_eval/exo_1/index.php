<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercice1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">      
                <form method="POST" id="form">
                    <div id="msg"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="prenom" name="prenom"  placeholder="Votre prenom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nom" name="nom"  placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                        <select name="sexe" id="sexe">
                            <option value="choix">genre</option>
                            <option value="m">homme</option>
                            <option value="f">femme</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="service" name="service"   placeholder="Service">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="salaire" name="salaire"   placeholder="Salaire">
                    </div>
                    <div class="form-group">
                        
                    </div>
                    <button type="submit" id="submit" class="btn btn-info">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>



<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="ajax.js"></script>
</body>
</html>