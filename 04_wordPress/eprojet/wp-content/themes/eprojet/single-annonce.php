<?php
get_header(); // inclusion de header.php
?>

<div class="col-lg-9">

    <?php
if (have_posts()):

    while (have_posts()): the_post();
        ?>

					<h1><?php the_title();?></h1>
					<div class="contenu"><?php the_content();?></div>

					<div><img class="img-fluid" src="<?php the_field('photo');?>"></div>

					<div class="info mt-4"><span>Marqu</span><?php the_field('marque');?></div>
					<div class="info"><span>Modèle : </span><?php the_field('modele');?></div>
					<div class="info"><span>Kilométrag</span><?php the_field('km');?> km</div>
					<div class="info"><span>Carburant : </span><?php the_field('carburant');?> km</div>
					<div class="info"><span>Prix : </span><?php the_field('prix');?> euros</div>
				<?php
    endwhile;

else:
    echo '<p> Aucune annonce ne correspond à vos critère ...</p>';
endif;

?>
</div>
<div class="col-lg-3">
    <?php
get_sidebar('droite'); // inclusion de la barre latérale du fichier sidebar-droite.php
?>
</div>










<?php
get_footer(); // inclusion de footer.php