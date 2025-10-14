<?php
function mein_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'hauptmenue' => 'Hauptmenü',
  ]);
}
add_action('after_setup_theme', 'mein_theme_setup');

function mein_theme_scripts() {
  wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mein_theme_scripts');
