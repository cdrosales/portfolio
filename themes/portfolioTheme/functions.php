<?php

// Adds script and stylesheets
function portfolio_files(){
    // NAME & LOCATION FOR PARAMETERS
    wp_enqueue_style('portfolio_styles', get_stylesheet_uri(), NULL, microtime()); // first parameter name of styleshee & second is the location
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,900,900i&display=swap');
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


function portfolio_webDevelopment(){
    register_post_type('webDevelopment', array( 
        'supports' => array('title', 'editor', 'thumbnail','excerpt'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Web Development', 
            'add_new_item' => 'Add New Site',
            'edit_item' => 'Edit Site',
            'all_items' => 'All Sites',
            'singular_name' => 'Site' 
        ),

        'menu_icon' => 'dashicons-hammer'
    ));
}

add_action('init', 'portfolio_webDevelopment');

function portfolio_videography(){
    register_post_type('videography', array( 
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Videography', 
            'add_new_item' => 'Add New Video',
            'edit_item' => 'Edit Video',
            'all_items' => 'All Video',
            'singular_name' => 'Video' 
        ),

        'menu_icon' => 'dashicons-video-alt2'
    ));
}

add_action('init', 'portfolio_videography');


?>