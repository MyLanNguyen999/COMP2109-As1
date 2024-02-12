<?php
function mychildtheme_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
}
add_action( 'after_setup_theme', 'mychildtheme_theme_setup' );
//* Add Featured image support to our posts
add_theme_support( 'post-thumbnails' );

//* Footer widgets
function as1_widgets_init() {
  register_sidebar ( array (
    'name'    => __('Footer Widget 1','as1'),
    'id'      => 'footer-widget-01',
    'description' => __('Footer Widget 1 Area','as1'),
    'before_widget' => '<div class="logo-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'  
  ));

  // register_sidebar ( array (
  //   'name'    => __('Footer Widget 2','as1'),
  //   'id'      => 'footer-widget-02',
  //   'description' => __('Footer Widget 2 Area','as1'),
  //   'before_widget' => '<div class="about-widget">',
  //   'widget-title'  => '</div>',
  //   'before_title'  => '<h4 class="widget-title">',
  //   'after_title'   => '</h4>' 
  // ));
}

//* Execute
add_action( 'widgets_init', 'as1_widgets_init');
?>

