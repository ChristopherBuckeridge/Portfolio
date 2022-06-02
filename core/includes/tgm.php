<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function engineering_manufacturing_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'engineering-manufacturing' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	engineering_manufacturing_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'engineering_manufacturing_register_recommended_plugins' );