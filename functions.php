<?php

/*Imports*/
function npInclude(){
    wp_enqueue_style('style', get_template_directory_uri(). '/style.css');
}

add_action('wp_enqueue_scripts', 'npInclude');

/*Theme Support*/
function npThemeSupport(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('starter-content');
    
    register_nav_menu('primary', __('Main Menu','portal-theme-1'));
}

add_action('after_setup_theme', 'npThemeSupport');

/*Custom Post Type*/

function npCustomPostTypes(){
    register_post_type('News',
        array(
          'labels' => array('name' => 'news'),
          'public' => true,
          'menu_position' => 3,
          'menu_icon' => 'dashicons-format-aside',
          'supports' => array('title','thumbnail', 'editor'),
          'taxonomies' => array('Type')
        )
    );
}
add_action('init','npCustomPostTypes');

/*Taxonomies*/

function newsTaxonomies(){
    register_taxonomy('Type', 'news', array(
        'labels' => array('name' => 'Type'),
        'hierarchical' => true,
    ));
}
add_action('init', 'newsTaxonomies')
?>