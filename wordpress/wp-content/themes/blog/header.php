<!doctype html>
<html lang="en">
	<head>
		<script type="text/javascript"> 
			var disqus_developer = 1; // this would set it to developer mode
		</script> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>Travelazja</title>

		<!-- Bootstrap core CSS -->
		<link href="http://localhost/wp-content/themes/blog/styles/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
		<link href="http://localhost/wp-content/themes/blog/styles/blog.css" rel="stylesheet">
		<!--    My style for this template-->
		<link rel="stylesheet" href="http://localhost/wp-content/themes/blog/styles/custom.css">
		<?php wp_head(); ?>
	</head>

	<body>
		
		<div id="headercontainer" class="container-fluid">
			<header class="blog-header py-3">
				<div class="row flex-nowrap justify-content-between align-items-center">
				
					<!--Empty space to push logo to center-->
					<!--<div class="col-4 pt-1">
						<a class="text-muted" href="#"></a>
					</div>--> 
					<div class="col-4 text-left">
						<a class="blog-header-logo text-dark" href="<?php echo get_bloginfo ('wpurl'); ?>">Travelazja</a>
					</div>
					<div class="col-4 d-flex justify-content-end align-items-center">
						<a class="text-muted" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
						</a>
					</div>
				</div>
			</header>
		</div>

		<div class="container">
			

			<div class="nav-scroller py-1 mb-2">
				<nav class="nav d-flex justify-content-between">
					<a class="p-2" href="#">Praktyczne</a>
					<a class="p-2" href="#">Podróżnicze</a>
					<a class="p-2" href="#">O mnie</a>
					<a class="p-2" href="<?php echo get_permalink(get_page_by_title('kontakt')); ?>">Kontakt</a>
					
					<!--Inny sposób napisania tego, trzeba sprawdzić przy edycji, który ma numer-->
					
					<!--<a class="p-2" href="<//?php echo get_page_link(12); ?>">Kontakt</a>-->
				</nav>
			</div>

			

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
<!--			Above section is for future-->
		
