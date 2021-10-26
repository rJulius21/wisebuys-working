<?php

function site_files() {
  // these lines add 3rd party css files to the theme
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Andada+Pro:ital,wght@1,500&family=Roboto+Condensed:wght@300;400;700&family=Roboto+Slab:wght@300;400&family=Roboto:wght@100;300;400;500');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  
  // these lines add our custom css and js files to the theme
  if(strstr($_SERVER['SERVER_NAME'], 'wordpress-boilerplate.local')){
    wp_enqueue_script('main-site-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
    wp_enqueue_script('main-site-js', get_theme_file_uri('/bundled-assets/scripts.7a5e0e1b1b558ad82483.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.7a5e0e1b1b558ad82483.css'));
  }
}
// tells wordpress to call the function 'site_files' after the page is loaded
add_action('wp_enqueue_scripts', 'site_files');

function site_features() {
  // Registers and activates the menu functionality in wordpress dashboard, adds multiple menus to the site 
  register_nav_menu('footerMenu', 'Footer Menu');
  register_nav_menu('otherHeaderMenu', 'Other Header Menu');
  register_nav_menu('categoriesHeaderMenu', 'Categories Header Menu');
  register_nav_menu('categoriesPageMenu', 'Categories Page Menu');

  // Adds titles dynamically in browser tabs
  add_theme_support('title-tag');
}
// tells wordpress to call the function 'site_features' after the theme is loaded
add_action('after_setup_theme', 'site_features');

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
  $exclude_filters[] = 'themes/wisebuys-dev/node_modules';
  return $exclude_filters;
}
