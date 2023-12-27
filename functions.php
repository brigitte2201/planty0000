<?php
// enqueue parent styles     
function twentytwenty_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme-planty.css', array(), filemtime(get_stylesheet_directory() . '/css/theme-planty.css'));
}
add_action( 'wp_enqueue_scripts', 'ns-enqueue_styles');



function add_extra_item_to_nav_menu($items,$args) {
		//hook vérifier si l''utilisateur est connecté et si le menu correspond.
		if ( is_user_logged_in() && $args->theme_location == 'primary' ) {
			$items .= '<li><a href="' . esc_url( home_url( '/wp-admin/index.php' ) ) . '">Admin</a></li>';
		}
		return $items;
	}
	add_filter('wp_nav_menu_items', 'add_extra_to_nav_menu',10 , 2);
