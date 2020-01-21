<?php

// Adds script and stylesheets
function portfolio_files(){
    // NAME & LOCATION FOR PARAMETERS
    wp_enqueue_style('portfolio_styles', get_stylesheet_uri(), NULL, microtime()); // first parameter name of styleshee & second is the location
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css"); 

}

add_action('wp_enqueue_scripts', 'portfolio_files');//add stylesheet

//Adds theme support - ex: title tag
function portfolio_features(){
    add_theme_support('post-thumbnails');
    add_theme_support ('title-tag'); 
    register_nav_menus( array(
        'primary' => 'Primary Menu', 
        'footer' => 'Footer Menu',
        'shop' => 'Product Categories Menu'
    ));
}
add_action('after_setup_theme', 'portfolio_features');



function portfolio_photography(){
    register_post_type('photography', array( 
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Photography', 
            'add_new_item' => 'Add New Photograph',
            'edit_item' => 'Edit Photograph',
            'all_items' => 'All Photography',
            'singular_name' => 'Photograph' 
        ),

        'menu_icon' => 'dashicons-camera-alt'
    ));
}

add_action('init', 'portfolio_photography');



?>