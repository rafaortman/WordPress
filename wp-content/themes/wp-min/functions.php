<?php

    require_once( get_template_directory() . '/carbon-fields.php' );

    //Add theme support
    function theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' ); 
        register_nav_menu('menu', 'menu');
        // add_theme_support( 'custom-logo' );
        // register_sidebar([
        //     'id' => 'aside',
        //     'name' => 'aside'
        // ]);
    }
    add_action( 'after_setup_theme', 'theme_setup' );

    add_image_size( 'fullhd', 1920, 1080 );

    //Adding theme css & js
    function theme_css_js() {
        wp_enqueue_style( 'theme-style', get_stylesheet_uri() . '?v='.time() );
        wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/scripts.js?v='.time(), array('jquery'), '20151215', true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_css_js' );

    //Remove emojis
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
    remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
