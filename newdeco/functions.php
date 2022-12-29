<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'deco_setup' ) ) :
	function deco_setup() {
		 register_nav_menus( [
            'header_menu' =>  __( 'Menu in header' , 'deco'),
            'footer_menu' => __( 'Menu in footer' , 'deco')
	    ] );
	}
endif;
add_action( 'after_setup_theme', 'deco_setup' );


/**
 * Enqueue scripts and styles.
 */
function deco_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'deco', get_template_directory_uri() . '/assets/css/deco.css', 'style', time());
    wp_enqueue_style( 'Montserrat', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap");
    wp_deregister_script( 'jquery-core' );
/* 	wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' ); */
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', 'deco',  time(), true);
}
add_action( 'wp_enqueue_scripts', 'deco_scripts' );




## отключаем создание миниатюр файлов для указанных размеров
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'homepage-thumb', 65, 65, true ); // Кадрирование изображения
}

add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
