<?php

function my_script_init() {
    wp_enqueue_style("my",get_template_directory_uri() . "/public/assets/css/style.css", array(), filemtime(get_theme_file_path('public/assets/css/style.css')),"all");

}

add_action("wp_enqueue_scripts","my_script_init");

add_theme_support('post-thumbnails');

add_filter('post_thumbnail_html', function($html) {
    return preg_replace('/(width|height)="\d*"\s/', '', $html);
});

function add_menu_order_support() {
  add_post_type_support('flow', 'page-attributes');
}
add_action('init', 'add_menu_order_support');

function add_menu_order_support_to_custom_post_types() {
  $post_types = ['flow', 'qa','feature']; 

  foreach ($post_types as $post_type) {
    add_post_type_support($post_type, 'page-attributes');
  }
}
add_action('init', 'add_menu_order_support_to_custom_post_types');



?>