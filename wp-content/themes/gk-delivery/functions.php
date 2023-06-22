<?php 
add_theme_support( 'menus' );
// if ( ! function_exists( 'gk_register_nav_menu' ) ) {
//     function power_register_nav_menu(){
// 		register_nav_menus( array(
// 	    	'header_menu' => __( 'Header Menu'),
// 		) ); 
// 	}
// 	add_action( 'after_setup_theme', 'gk_register_nav_menu' );
// }
    function my_scripts() {
        wp_enqueue_script( 'main_js', get_template_directory_uri()."/dist/js/main.js", array(), '', true);
        wp_enqueue_script( 'jQuery', "https://code.jquery.com/jquery-3.6.3.js");
        wp_enqueue_style ( 'main_css', get_template_directory_uri()."/dist/css/main.css");
    }
    add_action('wp_enqueue_scripts', 'my_scripts');

    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
    add_action('wp_enqueue_scripts', 'my_scripts');
    add_image_size( 'primary', 282, 126 );
    // add_image_size( 'sm-img', 80, 80 );
    // add_image_size( 'custom-size', 596, 448 );
    // add_image_size( 'main-size', 517, 517 );
    // add_filter('wp_nav_menu_container_allowedtags', function($args) {
    //     return array('nav');
    // })
;?>