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
    return 10; 
}

function add_flexslider() { // display attachment images as a flexslider gallery on single posting
     
    global $post; // don't forget to make this a global variable inside your function
    
    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image', ));
    
    if ($attachments) { // if there are images attached to posting, start the flexslider markup
        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
        foreach ( $attachments as $attachment_id => $attachment ) { // create the list items for images with captions
        
            echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');
            echo '<p>';
            echo get_post_field('post_excerpt', $attachment->ID);
            echo '</p>';
            echo '</li>';
            
        }
    
        echo '</ul>';
        echo '</div>';
        
    } // end see if images
    
} // end add flexslider