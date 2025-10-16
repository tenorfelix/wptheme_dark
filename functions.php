<?php
function ms_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'hauptmenue' => 'Hauptmenü',
  ]);
}
add_action('after_setup_theme', 'ms_theme_setup');

function ms_theme_assets() {
  wp_enqueue_style('ms-theme-style', get_stylesheet_uri(), [], '1.0');
}
add_action('wp_enqueue_scripts', 'ms_theme_assets');
