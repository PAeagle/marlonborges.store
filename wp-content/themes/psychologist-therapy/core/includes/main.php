<?php

add_action( 'admin_menu', 'psychologist_therapy_getting_started' );
function psychologist_therapy_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'psychologist-therapy'), esc_html__('Get Started', 'psychologist-therapy'), 'edit_theme_options', 'psychologist-therapy-guide-page', 'psychologist_therapy_test_guide');   
}

function psychologist_therapy_admin_enqueue_scripts() {
	wp_enqueue_style( 'psychologist-therapy-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'psychologist_therapy_admin_enqueue_scripts' );

if ( ! defined( 'PSYCHOLOGIST_THERAPY_DOCS_FREE' ) ) {
define('PSYCHOLOGIST_THERAPY_DOCS_FREE',__('https://www.misbahwp.com/docs/psychologist-therapy-free-docs/','psychologist-therapy'));
}
if ( ! defined( 'PSYCHOLOGIST_THERAPY_DOCS_PRO' ) ) {
define('PSYCHOLOGIST_THERAPY_DOCS_PRO',__('https://www.misbahwp.com/docs/psychologist-therapy-pro-docs','psychologist-therapy'));
}
if ( ! defined( 'PSYCHOLOGIST_THERAPY_BUY_NOW' ) ) {
define('PSYCHOLOGIST_THERAPY_BUY_NOW',__('https://www.misbahwp.com/themes/psychologist-wordpress-theme/','psychologist-therapy'));
}
if ( ! defined( 'PSYCHOLOGIST_THERAPY_SUPPORT_FREE' ) ) {
define('PSYCHOLOGIST_THERAPY_SUPPORT_FREE',__('https://wordpress.org/support/theme/psychologist-therapy','psychologist-therapy'));
}
if ( ! defined( 'PSYCHOLOGIST_THERAPY_REVIEW_FREE' ) ) {
define('PSYCHOLOGIST_THERAPY_REVIEW_FREE',__('https://wordpress.org/support/theme/psychologist-therapy/reviews/#new-post','psychologist-therapy'));
}
if ( ! defined( 'PSYCHOLOGIST_THERAPY_DEMO_PRO' ) ) {
define('PSYCHOLOGIST_THERAPY_DEMO_PRO',__('https://www.misbahwp.com/demo/psychologist-therapy/','psychologist-therapy'));
}

function psychologist_therapy_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( PSYCHOLOGIST_THERAPY_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'psychologist-therapy' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'psychologist-therapy' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( PSYCHOLOGIST_THERAPY_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'psychologist-therapy' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( PSYCHOLOGIST_THERAPY_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'psychologist-therapy' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','psychologist-therapy'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'psychologist-therapy'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','psychologist-therapy'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','psychologist-therapy'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','psychologist-therapy'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','psychologist-therapy'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'psychologist-therapy' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','psychologist-therapy'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( PSYCHOLOGIST_THERAPY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'psychologist-therapy' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( PSYCHOLOGIST_THERAPY_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'psychologist-therapy' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( PSYCHOLOGIST_THERAPY_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'psychologist-therapy' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
