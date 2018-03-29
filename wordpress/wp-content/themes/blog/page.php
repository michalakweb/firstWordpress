<?php get_header(); ?>

</div>

<main role="main" class="container">
	<div class="row mt-5">
		<div class="col-md-12 blog-main">
			

			<?php
			if ( have_posts() ) : while (have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

			

		</div><!-- /.blog-main -->

		
		<div class="mb-10"></div>

		<?php get_footer(); ?>





