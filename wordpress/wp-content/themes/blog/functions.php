<?php 

//Support Featured Images

add_theme_support( 'post-thumbnails' );

add_image_size('my-single-thumb', 900, 506, true);

add_image_size('my-mainpage-thumb', 800, 450, true);

// Add scripts and stylesheets

function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/styles/blog.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/styles/custom.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/scripts/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

//Remove of featured images dimensions

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}

