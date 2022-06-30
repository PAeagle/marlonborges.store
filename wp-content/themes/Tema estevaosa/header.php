<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">	
</head>
<body <?php body_class(); ?>>
	<header>
	<?php 
	if(has_nav_menu('primary')) {
		wp_nav_menu(array(
			'theme_locatin' => 'primary',
			'container' => 'nav',
			'container_class' => 'main_menu',
			'fallback_cb' => false 
		));
	}
	?>
	</header>
	