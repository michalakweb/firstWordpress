<?php get_header(); ?>

</div>

<main role="main" id='single-container' class="container">
	<div class="row pt-4 pb-5">
		<div class="col-md-10 col-centered  blog-main">
			
			<?php
			if ( have_posts() ) : while (have_posts() ) : the_post();

			get_template_part( 'content-single', get_post_format() );
			
			if ( comments_open() || get_comments_number() ) :
			comments_template();
			endif;

			endwhile; endif;
			?>


		</div><!-- /.blog-main -->



		<?php get_footer(); ?>





