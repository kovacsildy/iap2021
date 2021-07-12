<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', untrailingslashit( get_template_directory_uri() ) . '/dist/css/style.css' );
    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&display=swap', false ); 
    wp_enqueue_script( 'slick', untrailingslashit( get_template_directory_uri() ) . '/src/js/slick.js', ['jquery'], true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function add_slick() {
    wp_enqueue_script( 'slick', untrailingslashit( get_template_directory_uri() ) . '/src/js/slick.js', ['jquery'], true );
}
add_action( 'wp_enqueue_scripts', 'add_slick' );

if (!function_exists('iap_setup') ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function iap_setup() {
        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support( 'title-tag' );

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(343, 235, true);

		// Menu locations
		register_nav_menus(
			array(
				'menu' => __( 'Header', 'iap' ),
			)
		);

add_theme_support(
			'custom-logo',
			array(
				'width'       => 160,
				'height'      => 41,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);
    }
endif;
add_action( 'after_setup_theme', 'iap_setup' );