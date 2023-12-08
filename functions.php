<?php
/* enqueue scripts and style from parent theme */        
function twentytwenty_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_styles');
/*
function ajout_admin_menu($items, $args){
	//Ajouter quelque chose ici
}
add_filter('wp_nav_menu_items','ajout_admin_menu', 10, 2);*/