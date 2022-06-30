<?php
//Include
require get_template_directory().'/include/setup.php';

// Hooks

add_action('wp_enqueue_scripts', 'ae_theme_styles');
add_action('after_setup_theme', 'ae_after_setup');
add_action('widgets_init', 'ae_widgets');

?>