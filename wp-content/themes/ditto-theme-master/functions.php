<?php
/*** +Theme Includes ***/
include_once 'theme-includes-menu.php';
include_once 'theme-includes.php';
include_once "inc/ct-post-duplicator.php";
include_once "inc/ct-user-agent.php";
/*** +Theme Includes ***/

/*** +Register Theme Scripts ***/
function ditto_theme_scripts() {
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ditto_theme_scripts');
/*** -Register Theme Scripts ***/

/*** +Register Navigation Menus ***/
function intercolor_navigation_menus() {
  $locations = array(
    'main_menu' => __( 'Main Menu', 'text_domain' )
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'intercolor_navigation_menus' );
/*** -Register Navigation Menus ***/

/*** +Theme support ***/
add_theme_support( 'custom-logo' );
/*** +Theme support ***/
