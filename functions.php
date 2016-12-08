<?php

/*
	===========================
	Include Scripts
	===========================
*/

  function toymaker_script_enqueue() {

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/toymaker.css', array(), '1.0.0', 'all');
    wp_enqueue_script('jquery-3', get_template_directory_uri() . '/js/jquery-3.1.0.min.js', array(), '3.1.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/toymaker.js', array(), '1.0.0', true);

  }

  add_action('wp_enqueue_scripts', 'toymaker_script_enqueue');


  /*
  	===========================
  	Activate Menus
  	===========================
  */

  function mywordpresstheme_setup() {

  	add_theme_support('menus');

  	register_nav_menu('primary', 'Primary Header Navigation');
  	register_nav_menu('secondary', 'Footer Navigation');

  }

  add_action('init', 'mywordpresstheme_setup');


  /*
  	===========================
  	Add Theme Support
  	===========================
  */

  add_theme_support('custom-background');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  //add_theme_support('post-formats',array('aside','image','video'));

  /*
    ===========================
    Services
    ===========================
  */

  function create_service_post_type() {

    $args = array(
      'labels' => array(
        'name' => __('Services'),
        'singular_name' => __('Services'),
        'all_items' => __('All Services'),
        'add_new_item' => __('Add New Service'),
        'edit_item' => __('Edit Service'),
        'view_item' => __('View Service')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'services'),
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'capability_type' => 'page',
      'supports' => array('title', 'editor', 'thumbnail'),
      'exclude_from_search' => true,
      'menu_position' => 81,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt'
      );
    register_post_type('services', $args);
  }

  add_action( 'init', 'create_service_post_type');

  /*
    ===========================
    Projects
    ===========================
  */

  function create_project_post_type() {

    $args = array(
      'labels' => array(
        'name' => __('Projects'),
        'singular_name' => __('Projects'),
        'all_items' => __('All Projects'),
        'add_new_item' => __('Add New Project'),
        'edit_item' => __('Edit Project'),
        'view_item' => __('View Project')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects'),
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'capability_type' => 'page',
      'supports' => array('title', 'editor', 'thumbnail'),
      'exclude_from_search' => true,
      'menu_position' => 82,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt2'
      );
    register_post_type('projects', $args);
  }

  add_action( 'init', 'create_project_post_type');

  /*
    ===========================
    Articles
    ===========================
  */

  function create_article_post_type() {

    $args = array(
      'labels' => array(
        'name' => __('Articles'),
        'singular_name' => __('Articles'),
        'all_items' => __('All Articles'),
        'add_new_item' => __('Add New Article'),
        'edit_item' => __('Edit Article'),
        'view_item' => __('View Article')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'articles'),
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'capability_type' => 'page',
      'supports' => array('title', 'editor', 'thumbnail'),
      'exclude_from_search' => true,
      'menu_position' => 83,
      'has_archive' => true,
      'menu_icon' => 'dashicons-format-gallery'
      );
    register_post_type('articles', $args);
  }

  add_action( 'init', 'create_article_post_type');