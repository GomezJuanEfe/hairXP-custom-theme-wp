<?php

/* 
This function is going to help me to initialize the theme.
I can use any name
*/
function init_template() {
  add_theme_support('post-thumbnails');
  /* This feature enables Post Thumbnails support for a theme. */
  add_theme_support('title-tag');
  /* This feature enables plugins and themes to manage the document title tag. */
  register_nav_menus(
    array(
      'top_menu' => 'main'
    )
  );
  /* The last one is going to register the menu */
}

add_action('after_setup_theme', 'init_template');

/* Next function allows me to add libraries or styles sheets wp_register_style() is going to load the files after my style sheet*/
function assets() {
  wp_register_style('firaSans', 'https://fonts.googleapis.com/css2?family=Fira+Sans:ital@0;1&display=swap', '', '1.0', 'all');
  wp_enqueue_style('styles', get_stylesheet_uri().'?v='.time(), array('firaSans'), '1.0', 'all');

  wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0', true);
}
/* The functions itself it's useless, that's why we need a hook */

add_action('wp_enqueue_scripts', 'assets');

function sidebar() {
  register_sidebar(
    array(
      'name' => 'footer message',
      'id' => 'footer',
      'description' => 'widget zone for the footer',
      'before_title' => '<p>',
      'after_title' => '</p>',
      'before_widget' => '<div id="%1$s" class="%2$s"',
      'after_widget' => '</div>',
      'before_sidebar' => '',
      'after_sidebar'  => '',
    )
  );
}

add_action('widgets_init', 'sidebar');

function products_types() {
  $labels = array(
    'name' => 'Products',
    'singular_name' => 'Products',
    'menu_name' => 'Products',
  );
  $args = array(
    'label' => 'product',
    'description' => 'Hair loss products',
    'labels' => $labels,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
    'public' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-cart',
    'can_export' => true,
    'publicy_queryable' => true,
    'rewrite' => true,
    'show_in_rest' => true,
  );
  register_post_type('product', $args);
}

add_action('init', 'products_types');

?>