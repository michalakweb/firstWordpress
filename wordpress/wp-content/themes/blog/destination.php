<?php /* Template Name: destination */ ?>
<?php get_header(); ?>


<main role="main" class="container-fluid thaiBg">
	<div class="row">
		<div class="container-fluid destLoop">
			<div class="col-md-8 blog-main">
				
				<p><?php echo get_cat_name(9); ?></p>

				<?php
				$catThailand = new WP_Query('cat=9');

				if ( $catThailand->have_posts() ) : while ($catThailand->have_posts() ) : $catThailand->the_post();
				?>
				
				

				<h2><?php the_title(); ?></h2>


				<?php
				endwhile; 
				?>

				<div class="nav-prev"><?php next_posts_link('Starsze'); ?>
				</div>

				<div class="nav-next alignright"><?php previous_posts_link( 'Nowsze' ); ?></div>


				<?php else : ?>

				<?php _e('Sorry, no posts matched your criteria.'); ?>

				<?php endif; ?>


			</div><!-- /.blog-main -->
		</div>

		<?php get_footer(); ?>
