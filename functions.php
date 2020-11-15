<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}


require_once get_template_directory() . '/framework/init.php';
new stolTheme;

add_action( 'wp_enqueue_scripts', 'my_custom_scripts', 100 );
function my_custom_scripts()
{

    wp_enqueue_script('minJs', get_template_directory_uri() . '/js/scripts.min.js');


    wp_enqueue_style('slick-slider-css', get_template_directory_uri() . '/style.css');

}

add_theme_support('custom-logo');


add_theme_support('post-thumbnails');

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter( 'excerpt_length', function(){
    return 10;
} );

add_filter('excerpt_more', function($more) {
    return '...';
});


add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


add_theme_support('menus');

//add class to menu li item
function add_classes_on_li($classes) {
    $classes[] = 'header-menu__item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

//add class to menu a item
function add_menu_link_class($atts)
{
    $atts['class'] = 'header-menu__link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


//Add translate file
add_action( 'after_setup_theme', 'stolTheme_setup');
function stolTheme_setup(){
    load_theme_textdomain( 'stolichna', get_template_directory() . '/languages' );
}



define('THEME_PATH_IMG', get_template_directory_uri() . '/img/');