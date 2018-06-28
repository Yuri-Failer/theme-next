<?php
function next_files(){
	wp_enqueue_script('next-js', get_theme_file_uri('assets/js/scripts-bundled.js'), NULL, microtime() , true);
	wp_enqueue_style('lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,700"');
	wp_enqueue_style('next-styles', get_stylesheet_uri(), NULL, microtime());
	wp_enqueue_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', NULL, microtime());
}

add_action('wp_enqueue_scripts', 'next_files');
