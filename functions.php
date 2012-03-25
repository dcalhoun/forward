<?php
/**
 * Forward Church functions and definitions.
 *
 * @package WordPress
 * @subpackage Forward_Church
 * @since Forward Church 1.0
 */

if (function_exists('register_nav_menus')) {
  register_nav_menus(
    array(
      'primary' => 'Primary Menu'
    )
  );
}

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

if (function_exists('register_sidebar')) {
  register_sidebar(array(
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<div class="title">',
      'after_title' => '</div>'
    )
  );
}
