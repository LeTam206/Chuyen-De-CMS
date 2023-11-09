<?php

add_action('after_setup_theme', 'my_theme_support');
add_action('wp_enqueue_scripts', 'my_files');

function my_theme_support(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    
}

function my_files(){
    wp_enqueue_style('font google', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font awesome 4.7', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font awesome 6.4','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    wp_enqueue_style('bootstrap 5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('main style', get_stylesheet_uri());
    wp_enqueue_style('style 1', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('style 2', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_script('script', get_theme_file_uri('/build/index.js'));
    
}
