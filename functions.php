<?php

define("THEME_DIRECTORY_URI", get_template_directory_uri());

// hooks
add_action( 'wp_enqueue_scripts', 'artimis_register_styles');
add_action( 'wp_enqueue_scripts', 'artimis_register_scripts');
add_action( 'after_setup_theme', 'artimis_theme_support');

// init hooks
add_action( 'init', 'register_artimis_menus' );


// theme supports
function artimis_theme_support(){

    $defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo', $defaults);

}


function artimis_register_styles():void{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style( 'artimis_bootstrap', THEME_DIRECTORY_URI.'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'artimis_main_style', THEME_DIRECTORY_URI.'/style.css', array('artimis_bootstrap'), $version, 'all' );
    wp_enqueue_style( 'artimis_responsive', THEME_DIRECTORY_URI.'/assets/css/responsive.css', array(), $version, 'all' );
    wp_enqueue_style( 'artimis_animation', THEME_DIRECTORY_URI.'/assets/css/loaders.css', array(), $version, 'all' );
    wp_enqueue_style( 'artimis_animation', THEME_DIRECTORY_URI.'/assets/css/jquery.mCustomScrollbar.min.css', array(), $version, 'all' );
}
function artimis_register_scripts():void{

    $version = wp_get_theme()->get('Version');
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script( 'artimis_jquery', THEME_DIRECTORY_URI.'/assets/js/jquery.min.js', array(), '1.0.0', true  );
    wp_enqueue_script( 'artimis_popper', THEME_DIRECTORY_URI.'/assets/js/popper.min.js', array('artimis_jquery'), $version , true);
    wp_enqueue_script( 'artimis_bootstrap', THEME_DIRECTORY_URI.'/assets/js/bootstrap.bundle.min.js', array('artimis_popper'), $version , true);
    wp_enqueue_script( 'artimis_jquery_version_three', THEME_DIRECTORY_URI.'/assets/js/jquery-3.0.0.min.js', array('artimis_jquery'), $version , true);
    wp_enqueue_script( 'artimis_plugin', THEME_DIRECTORY_URI.'/assets/js/plugin.js', array('artimis_jquery'), $version , true );
    wp_enqueue_script( 'artimis_custom_scrollbar', THEME_DIRECTORY_URI.'/assets/js/jquery.mCustomScrollbar.concat.min.js', array('artimis_jquery'), $version , true);
    wp_enqueue_script( 'artimis_custom', THEME_DIRECTORY_URI.'/assets/js/custom.js', array('artimis_jquery'), $version  , true);
}
function register_artimis_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }

