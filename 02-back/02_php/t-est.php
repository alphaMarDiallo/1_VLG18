<?php
include "Contact.class.php";
echo '<pre>';
print_r($_POST);
echo '</pre>';
// $msg = '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Site portfolio2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="portfolio2.css" />
    <script src="portfolio2.js"></script>
    <!--    <script src="main.js"></script>-->
<!--Dans mon head je met en place les librairie et les fichier css -->
</head>
<body>
    <div class="container-fluid"> <!-- J'ai mit un container fluid pour qu'il prenne tout la largeur de l'écran-->
        <!-- presentation -->
        <nav class="navbar navbar-expand-lg navbar-disabled  bg-disabled fixed-top" id="navigation">
            <div class="container">
            <button class="navbar-toggler" style="color: #fff;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                aria-expanded="false" aria-label="Toggle navigation" >
                 <!-- Je met en place mon menu burgeur en cas de reduction de l'écran-->
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#titre" style="color: #fff;">JHORDAN SINVRY</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#experience">Expérience & Formation
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#competences">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#realisation">Mes Réalisation</a>
                    </li>
                    <!-- <li>
                            <a class="js-scroll-trigger" href="#contact" onclick=$(#menu-close).click();>Contact</a>
                        </li> -->
                </ul>

            </div>
            </div>
        </nav>
        <!--FIN NAV BAR-->
        <div class="row carte" > <!-- JE lui est mit la class carte pour pouvoir le stylisé dans mon css-->

            <!-- <div class="card bg-dark  text-white w-100 carte"     > -->


                <!-- <img class="card-img img-fluid" src="2c.jpg" alt="Card image"> -->

                <div class="col-4 offset-4 titre" id="titre"> <!-- De même pour ici -->
                    <h1 class="text-center " id="titre" style="color: #fff;">JHORDAN SINVRY</h1>
                    <h2 class="text-center" id="titre" style="color: #fff;">DEVELOPPEUR WEB JUNIOR</h2>
                </div>




        </div>

<br> <br><br><br>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center " id="experience">EXPERIENCE & FORMATION</h2>
                <br>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam non ex ipsa autem voluptatem asperiores ut beatae voluptates commodi, sequi tempora, itaque dolore dolorum nostrum tempore deserunt, nobis obcaecati est. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sed minus ducimus reprehenderit dolores molestias impedit expedita a vero repellat, ab beatae. Reprehenderit voluptas alias aspernatur totam officiis. Quidem, laboriosam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, asperiores aut? Suscipit non quis eveniet in provident! Animi laudantium exercitationem architecto aliquam cumque quos, et, sint quam nam, fugiat possimus.</p>
            </div>

        </div><!--FIN EXPERIENCE -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!--Debut partie competences-->
        <div class="container mb-5" style="box-shadow: 9px 10px 5px 0px rgba(0.,0.,0.60,0.75);box-shadow: 5px -1px 42px -7px rgba(0,0,0,0.75);background-color: #9d8f8f;">
            <h2 id="competences" style="color: #fff; text-align: center;">Mes compétences</h2>
            <div class="row">
                <div class="col-lg-12 mx-auto text-center pb-5" >
                    <div class="row">
                        <div class="col-md-3">
                            <img class="skills" src="php.png" alt="php">
                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <img class="skills" src="220px-PhotoFiltre.gif" alt="photoshop">
                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <img class="skills" src="HTML5.png" alt="">
                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <img class="skills" src="css.png" alt="">
                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <img class="skills" src="sql.png" alt="">

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <img class="skills" src="boostrap.png" alt="">

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <img class="skills" src="wordpress.png" alt="">

                        </div>
                        <!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <img class="skills" src="js.png" alt="">

                        </div>
                        <!-- /.col-md-3 -->
                    </div> <!--FIN ROW --><!---Je l'est mit dasn la row par ce que au debut il ne s'aligner pas et la ROW les arranger-->




                </div>
            </div> <!--FIN ROW -->
         </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <section id="portfolio" class="oeuvre pt-5" style="background:#F1F1F1">
                <div class="container">
                                <h2 id="realisation" >Mes Réalisation</h2>
                    <div class="row">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top rea" src="SiteWebApple.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Apple</h5>
                                    <p class="card-text">Site fait en HTML CSS </p>
                                    <p class="card-text">

                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top rea" src="06.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Menu restaurant</h5>
                                    <p class="card-text">Fait en html css le but etait du fait que quand tu clique sur les bouton il te renvoie une autre page.</p>
                                    <p class="card-text">

                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top rea" src="02.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Site Boutique</h5>
                                    <p class="card-text">Site fait en HTML CSS bootstrap</p>
                                    <p class="card-text">

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

<!--PARTIE FORMULAIRE -->
<footer id="contact" class=" formulaiwe pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center shadow"> <!-- Je lui est mit la classe shadow pour pouvoir la stylise en css shadow par ce que le texte sera en shadow une col md-12 pour qu'il prenne toute la cologne et center pour qu'il soit centrer -->
                <h4>
                    <strong>Contactez-moi ou télécharger mon CV !</strong>
                </h4>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 offset-0">
                <div class="">
                    <div> <?php echo $msg; ?> </div>
                    <!-- <div id="alertSuccess" class="alert alert-success"></div>
                    <div id="alertFail" class="alert alert-danger"></div> -->
                </div>
                <!--JE COMMENCE MON FORMULAIRE -->
                <div class="formulaire-contact">

                    <form class="form" action="" method="post">
                        <div class="form-group">
                            <label id="labelNom" class="labelContact" style="color: #fff;">Nom </label>

                            <input type="text" name="nom" class="form-control inputContact" placeholder="Votre nom" value="">
                        </div>
                        <div class="form-group">
                            <label id="labelEmail" class="labelContact" style="color: #fff;">Email </label>

                            <input type="text" name="email" class="form-control inputContact" placeholder="Votre email" value="">
                        </div>
                        <div class="form-group">
                            <label id="labelMessage" class="labelContact "  style="color: #fff;">Message </label>

                            <textarea name="message" class="form-control inputContact"  cols="30" rows="10" placeholder="Votre message"></textarea>
                             <!-- style="filter:alpha(opacity=50); opacity:0.10;" -->
                        </div>
                        <div class="form-group">
                            <input id="formSubmit" type="submit" class="btn btn-block btn-success" name="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-2 text-center"><!-- Le col-md-offset-2 je l'est mis pour qu'il soit cote à cote de de l'autre div col 6 dessous -->
                <div class="contactez">
                    <a href="" download="CV2.pdf">
                        <input id="CV" class="btn btn-outline-secondary btn-lg btn-block" type="button" value="Telecharger Mon CV">
                    </a>
                    <ul class="list-unstyled">
                        <!-- <li>
                            <a href="#" class="thumbnail ">
                                <img class="photo-profil" src="" width="150" height="150" alt="...">
                            </a>
                        </li> -->
                        <li>
                            <i class="fas fa-map-marker-alt"></i> <!--FONT AWESOME-->
                            <a target="_blank" href="https://goo.gl/maps/r8XDdYhEAur" style="color: #fff;">France, Colombes</a>
                        </li>
                        <li class="phone">
                            <i class="fas fa-mobile-alt"></i>
                            <a target="_blank" href="tel:0783309588" style="color: #fff;">0783309588</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope-square"></i>
                            <a target="_blank" href="" style="color: #fff;">jsinvry@gmail.com </a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a target="_blank" href="https://www.linkedin.com/in/jhordan-sinvry-8b325a167/">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a target="_blank" href="https://github.com/allmight02">
                            <i class="fab fa-github-alt"></i>
                            </a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted Copyright" >Copyright &copy; Jhordan Sinvry 2018 - 2019</p>
                </div>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top " class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
    </a>
    <!--          </div>
        </div>
        </div> -->
</footer>
    </div>
    <!--FIN FLUID CONTAINER-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    </body>

    </html>