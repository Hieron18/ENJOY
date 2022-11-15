<?php 

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );


   wp_enqueue_script( 'vendors', get_template_directory_uri() . '/assets/js/vendors.js', array(), '1.0.0', true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true );
});


add_theme_support('post-thumbnails');
// add_theme_support('title-tag');
// add_theme_support('custom-logo');

?>