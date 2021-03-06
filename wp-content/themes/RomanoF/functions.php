<?php

function enqueue_styles() {
    wp_enqueue_style( 'RomanoF-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/**** Активация навигации *****/
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
remove_filter('the_content', 'wpautop');


register_nav_menus( array(
    'top_menu' => 'Меню сверху',
    'footer_menu' => 'Меню в подвале'
) );

function get_my_product()
{
    global $wpdb;
    $fivesdrafts = $wpdb->get_results("SELECT * FROM $wpdb->categories");
    $fivesdrafts = json_decode(json_encode($fivesdrafts),true);
    return $fivesdrafts;
}
function goodlook ($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}