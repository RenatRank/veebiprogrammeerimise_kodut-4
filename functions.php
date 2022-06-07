<?php
  function my_style_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . 'style.css' );
  }
  add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');

  function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );


  function register_my_menus() {
    register_nav_menus(
      array(
        'links-menu' => __( 'Links Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );