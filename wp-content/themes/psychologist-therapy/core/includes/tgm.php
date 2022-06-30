<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function psychologist_therapy_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'psychologist-therapy' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	psychologist_therapy_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'psychologist_therapy_register_recommended_plugins' );