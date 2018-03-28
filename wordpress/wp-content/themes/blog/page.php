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

			endwhile; endif;
			?>

			<nav class="blog-pagination">
				<a class="btn btn-outline-primary" href="#">Older</a>
				<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
			</nav>

		</div><!-- /.blog-main -->



		<?php get_footer(); ?>





