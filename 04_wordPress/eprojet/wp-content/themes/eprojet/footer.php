  </div> <!-- /div -->
          </section><!--/section class="container" -->

          <footer class="align-items-center">
            <div class="container">
                <div class="row">

                <!-- <div class="col-lg-12">
                <div id="footer-gauche" class="align-items-center">
	                <div class="container">
	                </div> -->
	                <div class="col-lg-4">

	                        <?php dynamic_sidebar('footer-gauche');?>

                    </div>
	                <div class="col-lg-4">

                        <p>&copy; Mes petites annonces - 2018</p>
                    </div>
	                <div class="col-lg-4">

                          <?php
wp_nav_menu(array(
    'theme_location' => 'secondary',
));
?>
                    </div>

                </div>
            </div>

          </footer><!--/footerclass="container" -->
          <?php wp_footer();?><!--affiche le lien vers les cripts JS déclarés dans le fichier functions.php -->
    </body>
    </html>
