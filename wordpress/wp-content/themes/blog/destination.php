<?php /* Template Name: destination */ ?>
<?php get_header(); ?>


<main role="main" class="container-fluid thaiBg">
	<div class="row">
		<div class="container-fluid destLoop">
			<h3>Z pamiętnika:</h3>
			
			
			<div class="row">
					<?php
					$catThailand = new WP_Query('cat=9');

					if ( $catThailand->have_posts() ) : while ($catThailand->have_posts() ) : $catThailand->the_post();
					?>

				<div class="col mb-1">
					<div class="card text-dark" style="width: 15rem;">
						<img class="card-img-top" src=<?php echo the_post_thumbnail('my-mainpage-thumb'); ?>
						<div class="card-body">
							<h6 class="card-title"><?php the_title(); ?></h6>
						</div>
					</div>
				</div>


					<?php
					endwhile; 
					?>

					<div class="nav-prev"><?php next_posts_link('Starsze'); ?>
					</div>

					<div class="nav-next alignright"><?php previous_posts_link( 'Nowsze' ); ?></div>


					<?php else : ?>

					<?php _e('Sorry, no posts matched your criteria.'); ?>

					<?php endif; ?>
					
			        <?php wp_reset_postdata(); ?>
			</div>
			
			<h3>Praktyczne:</h3>


			<div class="row">
				<?php
				$catThailand = new WP_Query('cat=9');

				if ( $catThailand->have_posts() ) : while ($catThailand->have_posts() ) : $catThailand->the_post();
				?>

				<div class="col mb-1">
					<div class="card text-dark" style="width: 15rem;">
						<img class="card-img-top" src=<?php echo the_post_thumbnail('my-mainpage-thumb'); ?>
							 <div class="card-body">
						<h6 class="card-title"><?php the_title(); ?></h6>
					</div>
				</div>
			</div>


			<?php
			endwhile; 
			?>

			<div class="nav-prev"><?php next_posts_link('Starsze'); ?>
			</div>

			<div class="nav-next alignright"><?php previous_posts_link( 'Nowsze' ); ?></div>


			<?php else : ?>

			<?php _e('Sorry, no posts matched your criteria.'); ?>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>



		</div>
			
		</div>

		<?php get_footer(); ?>
