<aside class="col-md-4 blog-sidebar">
	<div id="aboutme" class="p-3 mb-3 bg-light rounded">
		<h4 class="">O mnie</h4>
		<img id="portret" src="<?php echo get_template_directory_uri(); ?>/images/portret.png" alt="">
		<h5 class="my-3 text-center">Cześć!</h5>
		<p class="mb-0 py-2 px-2 text-justify"><?php the_author_meta ('description'); ?></p>
	</div>

	<!--<div class="p-3">
		<h4 class="">Archives</h4>
		<ol class="list-unstyled mb-0">
			<?php wp_get_archives('type=monthly'); ?>
		</ol>
	</div>-->

	<div id="linki" class="p-3 bg-light rounded">
		<h4 class="">Linki</h4>
		<ol class="list-unstyled">
			<li class="pl-2">
				<div class="media">
						<img id="okurkaLogo" class="align-self-center mr-3" src="http://4.bp.blogspot.com/-nByJ_wSNdME/Uziau5zWIaI/AAAAAAAAAWI/GTByJIn6xT0/s1600/kura3.png" alt="img">
						<a href="https://okurrrka.blogspot.com">
							<div class="media-body">
								<h5 class="mt-0">O Kurrrka!</h5>
								Blog kulinarny. Duży wybór przepisów.
							</div>
						</a>
				</div>
			</li>
		</ol>
	</div>
</aside><!-- /.blog-sidebar -->