<?php 
function ae_theme_styles() {
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');

	wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', '', '', true);
}

function ae_after_setup() {
	add_theme_support('menus');

	register_nav_menu('primary', __('Primary Menu', 'estevaosa'));
};

function ae_widgets() {
	register_sidebar(array(
		'name' => __('ae sidebar', 'estevaosa'),
		'id' => 'ae_sidebar',
		'description' => __('ae sidebar para estevaosa', 'estevaosa'),
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));
}

?>