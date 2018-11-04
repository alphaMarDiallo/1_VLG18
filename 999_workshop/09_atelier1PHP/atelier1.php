<?php
function debug($param)
{
    echo "<pre> ";
    var_dump($param);
    echo "</pre> ";
}
debug($_GET);
$title = '';
$img = '';
$prix = '';

if (!empty($_GET)) {
    $title = $_GET['title'];
    $img = $_GET['img'];
    $prix = $_GET['prix'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Au Pois Gourmand</title>

    <!-- CSS de Bootstrap en 1er -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CSS perso en 2ème -->
    <link rel="stylesheet" href="lib/css/style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google FONT -->
    <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet"> 
    
</head>
<body>
<div class="container">
    <nav>
        <div class="row">
            <div class="offset-md-1 col-md-1">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="atelier.php"><i class="fas fa-kiwi-bird"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h1>Au Pois Gourmand</h1>
            </div> 
        </div>
    </nav>
    <div class="row">
        <div class="offset-md-1 col-md-4">
            <?php

            ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top rounded mx-auto d-block" src="lib/img/rome.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Formule Rome</h5>
                    <p class="card-text">Tomate buratina</p>
                    <p class="card-text">Rizoto aux aspèrge</p>
                    <p class="card-text">Panna cota</p>
                    <a href="?title=rome&img=lib/img/rome.jpg&prix=23" class="btn btn-info">Choisir</a>
                </div>
            </div>
        </div> 
        <div class="offset-md-2 col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top rounded mx-auto d-block" src="lib/img/nyork.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Formule New-York</h5>
                    <p class="card-text">César salade</p>
                    <p class="card-text">Cheese burger</p>
                    <p class="card-text">Cheesecake</p>
                    <a href="?title=nyork&img=lib/img/nyork.jpg&prix=30" class="btn btn-info">Choisir</a>
                </div>
            </div>
        </div>   
    </div>
    <div class="row">
        <div class="offset-md-1 col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top rounded mx-auto d-block" src="lib/img/delhi.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Formule Delhi</h5>
                    <p class="card-text">Poppadoms</p>
                    <p class="card-text">Agneau byriani</p>
                    <p class="card-text">Lassi mangue</p>
                    <a href="?title=nyork&img=lib/img/delhi.jpg&prix=25" class="btn btn-info">Choisir</a>
                </div>
            </div>
        </div> 
        <div class="offset-md-2 col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top rounded mx-auto d-block" src="lib/img/hanoi.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Formule Hanoï</h5>
                    <p class="card-text">Nems aux crevettes</p>
                    <p class="card-text">Poulet saté</p>
                    <p class="card-text">Perles de coco</p>
                    <a href="?title=nyork&img=lib/img/hanoi.jpg&prix=17" class="btn btn-info">Choisir</a>
                </div>
            </div>
        </div>   
        <div class="row">
            <div class="card">
                <img src="<? echo $img; ?>" class="rounded float-left" alt="...">
                <h5 class="card-header">Merci pour votre commande !</h5>
                <div class="card-body">
                    <h5 class="card-title">Votre formule <?php echo $title; ?> arrive dans quelques instants...</h5>
                    <p class="card-text">Nous vous souhaitons une bonne dégustation.</p>
                    <p class="card-text">Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.</p>
                    <p class="card-text">Votre facture sera de <? echo $prix; ?> <i class="fas fa-kiwi-bird">€</p>
                    <a href="#" class="btn btn-primary">Choisir un autre menu</a>
                </div>
            </div>
        </div>
     <!-- FIN CONTAINER -->
    </div>

    <footer>
        <div class="row">
            <div class="col-md-9">
                <ul class="nav justify-content-end p">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-kiwi-bird">...</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-kiwi-bird">...</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-kiwi-bird">...</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-kiwi-bird">...</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-kiwi-bird">...</i></a>
                    </li>
                </ul>
           </div>
            <div class="offset-md-9 col-md-3 signature">
                <h3>Au pois Gourmand</h3>
            </div>
        </div>
    </footer>
</div>
    <!-- script parce que Bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
