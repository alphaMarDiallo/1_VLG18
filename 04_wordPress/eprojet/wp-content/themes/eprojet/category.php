<?php
get_header();

$current_cat = ''; // contient la categorie selectionné par l'internaute

$current_cat = get_query_var('category_name'); // get_query_var('category-name) va chercher le nom de la catégorie utilisé par la requête principal de WP et qui correspond à la catégorie sur laquelle a cliqué l'internaute.

var_dump($current_cat); // on voit que l'on récupère le nom de la catégorie choisie sous forme de string

$query = query_posts(array(
    'post_type' => 'annonce', // le slug de notre cusotum post type (CPT UI) "annonce"
    'category_name' => $current_cat,

)); // sélectionne en BDD les posts de type "annonce" ET de catégorie celle qui est utilisé par la requête principale, autrement dit celle qui est choisie par l'internaute. Attention : cette fonction de requête remplace complètement la requête principale : il ne faut donc pas oublier de restaurer cette dernière avec la fonction "wp_reset_query()" à la fin de notre script.

?>

<div class="col-lg-12">
    <h1>Nos <?php echo $current_cat; ?></h1>
</div>

<div class="col-lg-9">
    <?php
if (have_posts()):
    while (have_posts()): the_post();
    ?>
		<div class="row cat-info">
			<div class="col-lg-3">
				<a href="<?php the_permalink();?>">
						            <img class="img-fluid" src="<?php the_field('photo');?>" alt="<?php the_title();?>">
				</a>
			</div>
			<div class="col-lg-9">
				<h4>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
				</h4>
				<div class="info mt-4"><span>Marque :</span><?php the_field('marque');?></div>
				<div class="info"><span>Modèle : </span><?php the_field('modele');?></div>
				<div class="info"><span>Prix : </span><?php the_field('prix');?> euros</div>
			</div>
		</div>
	<?php
    endwhile;

else:

    echo '<p>Aucune annonces ne correspond à vos critères...</p>';

endif;
wp_reset_query(); // restaure la requête principale après un query_posts()
?>
</div>
<div class="col-lg-3">
    <?php get_sidebar('droite');?>
</div>
























<?php
get_footer();