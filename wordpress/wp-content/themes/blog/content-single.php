<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"></p>
	
	<div class="img-responsive-16by9">
	<?php echo the_post_thumbnail('my-single-thumb'); ?>
	</div>

	<?php the_content(); ?>

</div><!-- /.blog-post -->


