<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	
	<div class="img-responsive-16by9">
			<?php echo the_post_thumbnail('my-mainpage-thumb'); ?>
	</div>
	
	<?php the_excerpt(); ?>
	
	<a href="<?php comments_link(); ?>">
		<?php
		printf( _nx('1 Komentarz', 'Komentarze (%1$s)', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
	</a>
	
</div><!-- /.blog-post -->


