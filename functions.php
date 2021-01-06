<?php 

function template_files() {
   
    wp_enqueue_style('custom_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    if (strstr($_SERVER['SERVER_NAME'], 'template.local')) {
      wp_enqueue_script('template_main_js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);

    } else {
      wp_enqueue_script('our-venders-js', get_theme_file_uri('/bundled-assets/venders.js'), NULL, '1.0', true);
      wp_enqueue_script('template_main_js', get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'), NULL, '1.0', true);
      wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'));
    }

}

add_action('wp_enqueue_scripts', 'template_files');

function template_features() {
  add_theme_support('title-tag');
};

add_action('after_setup_theme', 'template_features');

function template_adjust_queries($query) {

};
add_action('pre_get_posts', 'template_adjust_queries');
?>