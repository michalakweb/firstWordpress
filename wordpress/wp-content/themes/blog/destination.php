<?php /* Template Name: destination */ ?>
<?php get_header(); ?>


<main role="main" class="container-fluid thaiBg">
	<div class="row">
		<div class="container-fluid destLoop">
			<h3 class="mt-4 mb-3">Z pamiętnika:</h3>
			
			
			<div class="row justify-content-center">
					<?php
					$catThailand = new WP_Query('cat=9&tag=pamietnik&orderby=title&order=ASC');

					if ( $catThailand->have_posts() ) : while ($catThailand->have_posts() ) : $catThailand->the_post();
					?>

				<div class="col-auto mb-2">
					<div class="card text-dark" style="width: 15rem;">
						<a href="<?php the_permalink(); ?>">
							<img class="card-img-top" src=<?php echo the_post_thumbnail('my-mainpage-thumb'); ?>
						</a>
						
						<div class="card-body">
							<h6 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
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
			
		<h3 class="mt-4 mb-3">Praktyczne:</h3>


			<div class="row justify-content-center mb-4">
				<?php
				$catThailand = new WP_Query('tag=praktyczne');

				if ( $catThailand->have_posts() ) : while ($catThailand->have_posts() ) : $catThailand->the_post();
				?>

				<div class="col-auto mb-2">
					<div class="card text-dark" style="width: 15rem;">
						<a href="<?php the_permalink(); ?>">
							<img class="card-img-top" src=<?php echo the_post_thumbnail('my-mainpage-thumb'); ?>
						</a>
						<div class="card-body">
							<h6 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
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
