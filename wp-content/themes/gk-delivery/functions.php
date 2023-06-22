<?php 
add_theme_support( 'menus' );
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
;?>