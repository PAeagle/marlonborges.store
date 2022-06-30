<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'psychologist_therapy_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'psychologist-therapy' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'psychologist-therapy' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'psychologist-therapy' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'psychologist_therapy_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'psychologist-therapy' ),
	) );

	// POST SECTION

	Kirki::add_section( 'psychologist_therapy_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'psychologist-therapy' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'psychologist-therapy' ),
	    'panel'          => 'psychologist_therapy_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_post_heading',
		'section'     => 'psychologist_therapy_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'psychologist_therapy_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'psychologist_therapy_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'psychologist-therapy' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'psychologist-therapy' ),
	    'panel'          => 'psychologist_therapy_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_timing_heading',
		'section'     => 'psychologist_therapy_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Timing', 'psychologist-therapy' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'psychologist_therapy_header_timing',
		'section'  => 'psychologist_therapy_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_header_phone_number_heading',
		'section'     => 'psychologist_therapy_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'psychologist-therapy' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'psychologist_therapy_header_phone_number',
		'section'  => 'psychologist_therapy_section_header',
		'default'  => '',
		'sanitize_callback' => 'psychologist_therapy_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_location_heading',
		'section'     => 'psychologist_therapy_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'psychologist-therapy' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'psychologist_therapy_header_location',
		'section'  => 'psychologist_therapy_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_search',
		'section'     => 'psychologist_therapy_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_search_box_enable',
		'section'     => 'psychologist_therapy_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_socail_link',
		'section'     => 'psychologist_therapy_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'psychologist-therapy' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'psychologist_therapy_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'psychologist-therapy' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'psychologist-therapy' ),
		'settings'     => 'psychologist_therapy_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'psychologist-therapy' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'psychologist-therapy' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'psychologist-therapy' ),
				'description' => esc_html__( 'Add the social icon url here.', 'psychologist-therapy' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'psychologist_therapy_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'psychologist-therapy' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'psychologist-therapy' ),
        'panel'          => 'psychologist_therapy_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_heading',
		'section'     => 'psychologist_therapy_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_slider_heading',
		'section'     => 'psychologist_therapy_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'psychologist_therapy_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'psychologist_therapy_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'psychologist-therapy' ),
		'priority'    => 10,
		'choices'     => psychologist_therapy_get_categories_select(),
	] );

	// OUR SESSION SECTION

	Kirki::add_section( 'psychologist_therapy_session_section', array(
	    'title'          => esc_html__( 'Our Session Settings', 'psychologist-therapy' ),
	    'description'    => esc_html__( 'Here you can add different type of session.', 'psychologist-therapy' ),
	    'panel'          => 'psychologist_therapy_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_enable_heading',
		'section'     => 'psychologist_therapy_session_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Session',  'psychologist-therapy' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_session_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_session_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'psychologist-therapy' ),
			'off' => esc_html__( 'Disable',  'psychologist-therapy' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_session_text_heading',
		'section'     => 'psychologist_therapy_session_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Our Session', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'psychologist-therapy' ),
		'settings' => 'psychologist_therapy_session_heading',
		'section'  => 'psychologist_therapy_session_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'psychologist-therapy' ),
		'settings' => 'psychologist_therapy_session_heading_text',
		'section'  => 'psychologist_therapy_session_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'psychologist_therapy_session_category',
		'label'       => esc_html__( 'Select the category to show session ', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_session_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'psychologist-therapy' ),
		'priority'    => 10,
		'choices'     => psychologist_therapy_get_categories_select(),
	] );
    
	// FOOTER SECTION

	Kirki::add_section( 'psychologist_therapy_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'psychologist-therapy' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'psychologist-therapy' ),
        'panel'          => 'psychologist_therapy_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_footer_text_heading',
		'section'     => 'psychologist_therapy_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'psychologist_therapy_footer_text',
		'section'  => 'psychologist_therapy_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'psychologist_therapy_footer_enable_heading',
		'section'     => 'psychologist_therapy_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'psychologist-therapy' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'psychologist_therapy_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'psychologist-therapy' ),
		'section'     => 'psychologist_therapy_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'psychologist-therapy' ),
			'off' => esc_html__( 'Disable', 'psychologist-therapy' ),
		],
	] );
}