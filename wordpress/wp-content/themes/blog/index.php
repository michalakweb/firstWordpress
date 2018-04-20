<?php get_header(); ?>

<!--Big feature post - add in the future-->

<!--<div class="container">
	<div class="row">
		<div class="col-md">
			<div id="main-jumbotron" class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">Title of a featured blog post</h1>
					<p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently.</p>
					<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
				</div>
			</div>
		</div>
	</div>
</div>-->
    
<!-- Area to add: to featured blog posts

<div class="row mb-2">
<div class="col-md-6">
<div class="card flex-md-row mb-4 box-shadow h-md-250">
<div class="card-body d-flex flex-column align-items-start">
<strong class="d-inline-block mb-2 text-primary">World</strong>
<h3 class="mb-0">
<a class="text-dark" href="#">Featured post</a>
</h3>
<div class="mb-1 text-muted">Nov 12</div>
<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
<a href="#">Continue reading</a>
</div>
<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
</div>
</div>
<div class="col-md-6">
<div class="card flex-md-row mb-4 box-shadow h-md-250">
<div class="card-body d-flex flex-column align-items-start">
<strong class="d-inline-block mb-2 text-success">Design</strong>
<h3 class="mb-0">
<a class="text-dark" href="#">Post title</a>
</h3>
<div class="mb-1 text-muted">Nov 11</div>
<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
<a href="#">Continue reading</a>
</div>
<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
</div>
</div>
</div>
--> 

    <main role="main" class="container pt-4">
      <div class="row">
        <div class="col-md-8 blog-main">
        
        	<!--Conditional statements that rely on categories-->
			<!--<?php if(is_category( 'Wietnam' )) : ?>
			<h3 class="pb-3 mb-4 border-bottom">Najnowsze wpisy prosto z Wietnamu</h3>
			<?php  else: ?>
			<h3 class="pb-3 mb-4 border-bottom">Najnowsze wpisy</h3>
			<?php endif; ?>-->
          
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

        



   