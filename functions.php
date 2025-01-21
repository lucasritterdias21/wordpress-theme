<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


function enqueue_swiper_scripts() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');



?>