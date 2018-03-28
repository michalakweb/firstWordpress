<?php get_header(); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Najnowsze wpisy
          </h3>
          
          	<?php
			if ( have_posts() ) : while (have_posts() ) : the_post();
				
			get_template_part( 'content', get_post_format() );
			
			endwhile; ?>
			
			<div class="nav-prev"><?php next_posts_link('Starsze'); ?>
			</div>

			<div class="nav-next alignright"><?php previous_posts_link( 'Nowsze' ); ?></div>


			<?php else : ?>

			<?php _e('Sorry, no posts matched your criteria.'); ?>

			<?php endif; ?>
         

        </div><!-- /.blog-main -->
        
        
        <?php get_sidebar(); ?>
        
        <?php get_footer(); ?>

        



   