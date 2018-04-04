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

		<?php wp_head(); ?>
	</head>

	<body>
		
		<nav class="navbar navbar-expand-md navbar-light py-3">
			<a class="navbar-brand" href="<?php echo get_bloginfo ('wpurl'); ?>">Travelazja</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Praktyczne</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Podróżnicze </a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">O mnie</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo get_permalink(get_page_by_title('kontakt')); ?>">Kontakt</a>
					</li>
				</ul>
				
				<!--Szukajka-->
				
				<!--<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>-->
			</div>
		</nav>

		
