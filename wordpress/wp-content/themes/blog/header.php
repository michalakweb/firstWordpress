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
		
		<nav class="navbar navbar-expand-md navbar-dark">
			<a id="logotext" class="navbar-brand justify-content-center" href="<?php echo get_site_url() ?>">
				<p>Travelazja</p>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto text-center">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kierunki</a>
						<div class="dropdown-menu">
							<a class="dropdown-item text-white" href="<?php echo get_page_link(41); ?>">Tajlandia</a>
							<!--<a class="dropdown-item" href="<?php echo get_category_link(10); ?>">Kambodża</a>
							<a class="dropdown-item" href="<?php echo get_category_link(11); ?>">Chiny</a>
							<a class="dropdown-item" href="<?php echo get_category_link(8); ?>">Wietnam</a>-->
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Praktyczne</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">O mnie</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Kontakt</a>
					</li>
					<li>
						
					</li>
				</ul>
				<div class="d-none d-lg-block">

					<form role="search" method="get" id="searchform" class="searchform" action="http://michalakweb.000webhostapp.com/">
						<div class="form-row align-items-center" id="searchcontainer">
							<label class="screen-reader-text" for="s"></label>
							<div class="col-auto">
								<input class="form-control" type="text" value="" name="s" id="s">
							</div>
							<div class="col-auto">
								<input class="btn btn-success text-light" type="submit" id="searchsubmit" value="Szukaj">
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</nav>

		
