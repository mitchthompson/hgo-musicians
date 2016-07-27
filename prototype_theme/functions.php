<?php

add_theme_support('automatic-feed-links');

// Registers Navigation menu
add_action('init','register_menu');
function register_menu(){
    register_nav_menu('main-menu',__('Navigation'));
}

// Changes default excerpt length to avoid breaking posts on front page.
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
    return 15; 
}