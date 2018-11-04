<?php
echo '<pre style="background-color: #d5ecd4 ;width: 1Ovw;">';
echo '<strong>var_dump($param)</strong> <br>';
var_dump($_GET);
echo '</pre>';
//require 'init.inc.php';
$accueil = $_GET['action'];
$contenu = '';
$affichage = '';


/* SEKECTION VOYAGE */
while($voyage=$pdo->query("SELECT * FROM voyage")){

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atelier 2 PHP</title>

    <!-- CSS de Bootstrap en 1er -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CSS perso en 2ème -->
    <link rel="stylesheet" href="css/style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        .carousel-item {
            max-height:80vh;
        }
        .carousel2 .carousel-item {
            max-height:30vh;
        }
        .card-body img{
            max-height: 30vh;
        }
        .nav-item img{
            max-height:10vh;
        }

    </style>
</head>
<body>
    <!-- .container-fluid-->
   <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg mb-4 fixed-top navbar-light">
            <div class="container">
                <a class="navbar-brand" href="?action=home"><i class="fab fa-phoenix-framework"></i> Phoenix</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="?action=choix">Choisir une destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=payer">Payer</a>
                    </li>
                    </ul>
            </div>
                <!-- <span class="navbar-text">
                    Navbar text with an inline element
                </span> -->
            </div>
        </nav>
    <?php
    if(empty($accueil) || $accueil === 'home'){ ?>
        <!-- carousel -->
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="lib/img/caraibes1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/caraibes.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/caraibes_martinique_boucaniers.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/grece_gregolimano.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/maldives.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/maldives_fino.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/maldives_kani.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/maurice.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/maurice_albion.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/sicile_kamarina.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="lib/img/turkoise.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
         <!-- FIN carousel -->
        </div>
        <!-- bouton choisir mon séjour -->
        <a href="?action=choix" class="btn btn-outline-info btn-md" role="button" aria-pressed="true">Choisir mon séjour tout de suite !</a>
    <?php } else if($_GET['action'] === 'choix') { ?>
        <!-- container -->
        <div class="container">
           <div class="section-card">
                <div class="container">
                    <!-- CARDS 1 -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-info mb-3" style="width: 18rem;">
                                <img class="card-img-top" src="lib/img/caraibes_martinique_boucaniers.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Les Boucaniers</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="?action=reserver" class="btn btn-outline-info  btn-block">Réservez maintenant !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-info mb-3" style="width: 18rem;">
                                <img class="card-img-top" src="lib/img/sicile_kamarina.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Kamarina</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="?action=reserver" class="btn btn-outline-info  btn-block">Réservez maintenant !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-info mb-3" style="width: 18rem;">
                                <img class="card-img-top" src="lib/img/maldives_fino.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Finohlu</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="?action=reserver" class="btn btn-outline-info  btn-block">Réservez maintenant !</a>
                                </div>
                            </div>
                        </div>
                    <!-- FIN CARDS 1 -->
                    </div>
                    <!-- CARDS 2 -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-info mb-3" style="width: 18rem;">
                                <img class="card-img-top" src="lib/img/maurice_albion.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Albion sauvage</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="?action=reserver" class="btn btn-outline-info  btn-block">Réservez maintenant !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-info mb-3" style="width: 18rem;">
                                <img class="card-img-top" src="lib/img/maldives_kani.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Kani</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="?action=reserver" class="btn btn-outline-info btn-block">Réservez maintenant !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-info mb-3" style="width: 18rem;">
                                <img class="card-img-top" src="lib/img/grece_gregolimano.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Gregolimano</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="?action=reserver" class="btn btn-outline-info  btn-block">Réservez maintenant !</a>
                                </div>
                            </div>
                        </div>
                    <!--  FIN CARDS 2 -->
                    </div>
                </div>
        <!-- FIN .section-cards -->
           <div>
        <!-- FIN .container -->
        </div>
        <?php } else if($_GET['action'] === 'reserver') { ?>
        <div class="row"> <!-- .row resa & image -->
            <!-- section-resa -->
                <div class="col-md-4">
                    <div class="card text-center border-info">
                        <div class="card-body ">
                             <img class="card-img-top" src="lib/img/caraibes1.jpg" alt="Card image cap">
                            <p class="card-text">Caraïbes</p>
                        </div>
                        <div class="card-footer text-muted bg-info">
                            <p class="card-text"> 1 semaine / personne : </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card border-info">
                    <div class="card-header">
                        <p>Je complète mes informations de réservation.</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder=" Email de confirmation">
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" name="semaines" placeholder="Je pars combien de semaines? ">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="participants" placeholder="Nombre de vacanciers ?">
                                </div>
                            </div>
                        </form>
                            <a href="?action=confirmer" class="btn btn-info btn-block">Confirmer ma réservation</a>
                        </div>
                    </div>
                </div>
            <!--FIN section-resa -->
             <?php } else if ($_GET['action'] === 'confirmer' || $_GET['action'] ==='payer' ) { ?>
            <div class="row"> <!--section image -->
                <div class="col-md-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><img src="lib/img/caraibes.jpg" alt="..." class="rounded-0"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="lib/img/caraibes1.jpg" alt="..." class="rounded-0"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="lib/img/caraibes_martinique_boucaniers.jpg" alt="..." class="rounded-0"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"><img src="lib/img/grece_gregolimano.jpg" alt="..." class="rounded-0"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"><img src="lib/img/maldives.jpg" alt="..." class="rounded-0"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"><img src="lib/img/maldives_fino.jpg" alt="..." class="rounded-0"></a>
                        </li>
                    </ul>
                </div>
            </div><!-- FIN section image -->
        </div><!--FIN .row resa & image-->
        <div class="row"> <!-- .row confirmation-->
            <div class="col-md-12"><!-- .col-md-12-->
                <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                </div>
            </div><!-- FIN .col-md-12-->
        </div><!-- FIN .row confirmation-->
        <div class="row"><!--.row boutton récap-->
            <div class="col-md-2">
                <div class="alert alert-warning" role="alert">
                    <p>Participant(s)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-warning" role="alert">
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="alert alert-success" role="alert">
                    <p>Commande</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-success" role="alert">
                    
                </div>
            </div>
        </div><!-- FIN .row boutton récap-->
        <div class="row"><!--.row boutton récap-->
            <div class="col-md-2">
                <div class="alert alert-warning" role="alert">
                    <p>Semaine(s)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-warning" role="alert">
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="alert alert-success" role="alert">
                    <p>Total</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-success" role="alert">
                    
                </div>
            </div>
        </div><!-- FIN .row boutton récap-->
        <div class="row"> <!-- .row confirmation-->
            <div class="col-md-12"><!-- .col-md-12-->
                <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                </div>
            </div><!-- FIN .col-md-12-->
        </div><!-- FIN .row confirmation-->
            <?php } ?>
        <footer>
            <div class="row mt-4">
                <div class="col">
                    <div class="container">
                        <ul class="nav">
                                <li class="nav-item">
                                    <i class="fas fa-umbrella-beach">Vos vacances de rêves...</i>
                                </li>
                                <li class="nav-item">
                                    <i class="fas fa-sun">Plage...</i>
                                </li>
                                <li class="nav-item">
                                    <i class="fas fa-building">Urbaine...</i>
                                </li>
                                <li class="nav-item">
                                    <i class="fas fa-ship">Croisière...</i>
                                </li>
                                <li class="nav-item">
                                    <i class="fas fa-image">Montagne...</i>
                                </li>
                                <li class="nav-item">
                                    <i class="fas fa-euro-sign">A pris tout doux...</i><i class="fas fa-umbrella-beach"></i>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li> -->
                            </ul>
                    </div>
                </div>
            </div>
        </footer>
      <!-- FIN .container-fluid -->
   </div>



    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
