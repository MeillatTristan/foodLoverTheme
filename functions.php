<?php 

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array (), 1.1, 'all');
    wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDpPn9P9MT3lFawFHAqEvP_Rkj86tM6pi0', array(), '3', true );
		wp_enqueue_script( 'google', get_template_directory_uri() . '/assets/js/google.js', array('google-map', 'jquery'), '0.1', true );
	
  }

function montheme_supports(){
  add_theme_support( 'title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support('menus');
  register_nav_menu('header', 'en-tête du menu');
}

function montheme_menu_class ($classes){
  $classes[] = 'blockHeader';
  return $classes;
}

function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyDpPn9P9MT3lFawFHAqEvP_Rkj86tM6pi0';
  return $api;
}

function my_function_admin_bar(){
	return true;
}

function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'after_setup_theme', 'montheme_supports');
add_filter( 'wp_title', 'montheme_title');
add_filter( 'nav_menu_css_class', 'montheme_menu_class');
add_action('after_setup_theme', 'remove_admin_bar');
