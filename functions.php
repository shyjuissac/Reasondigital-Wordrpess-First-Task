


<?php

function rdStyles(){
    
    wp_enqueue_style('rdtask-style', get_template_directory_uri(). "/style.css", array(), '1.0', 'all');
    
}

add_action('wp_enqueue_scripts', 'rdStyles');

function rdSripts(){
    
    wp_enqueue_script('rdtask-custom', get_template_directory_uri(). "/assets/js/custom.js", array(), '1.1.1', true );
    
}

add_action('wp_enqueue_scripts', 'rdSripts');

function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}

add_action( 'init', 'register_my_menus' );
function word_count($string, $limit) {
 
$words = explode(' ', $string);
 
return implode(' ', array_slice($words, 0, $limit));
 
}


add_theme_support('post-thumbnails');
add_theme_support('custom-logo');


?>