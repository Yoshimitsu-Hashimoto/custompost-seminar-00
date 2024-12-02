<?php

// アイキャッチの有効化
add_theme_support('post-thumbnails');

function demo_load_styles() { 
  wp_enqueue_style('demo-style', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_stylesheet_directory() . '/assets/css/style.css')); 
} 
add_action('wp_enqueue_scripts', 'demo_load_styles');