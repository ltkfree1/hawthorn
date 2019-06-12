<?php
// General Customizer Settings

// Add section
$wp_customize->add_section( 'hawthorn_new_section_footer' , array(
	'title'      => esc_html__( 'Footer Settings', 'hawthorn' ),
	'priority'   => 97,
) );

// Add Settings
$wp_customize->add_setting(
	'hawthorn_footer_columns',
	array(
		'default'     => '4',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'hawthorn_footer_widgets',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_footer_text_madeby',
	array(
		'default'     => wp_kses( __('Made with <i class="fa fa-heart"></i> in Seattle.', 'hawthorn'), array( 'i' => array( 'class' => array() ), 'a' => array( 'href' => array() ), 'strong' => array() ) ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_footer_text_copyright',
	array(
		'default'     => wp_kses( __('(C) Copyright 2018 - Solo Pine Designs. All Rights Reserved. Designed & Developed by <a href="//solopine.com">Solo Pine</a>.', 'hawthorn'), array( 'i' => array( 'class' => array() ), 'a' => array( 'href' => array() ), 'strong' => array() )  ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_footer_share',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_columns',
		array(
			'label'          => esc_html__( 'Footer Columns', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_footer',
			'settings'       => 'hawthorn_footer_columns',
			'type'           => 'radio',
			'priority'	 => 1,
			'choices'        => array(
				'4'   => esc_html__( '4 Columns', 'hawthorn' ),
				'3'  => esc_html__( '3 Columns', 'hawthorn' ),
			)
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_widgets',
		array(
			'label'      => esc_html__( 'Hide Footer Widget Area', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_footer',
			'settings'   => 'hawthorn_footer_widgets',
			'type'		 => 'checkbox',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_share',
		array(
			'label'      => esc_html__( 'Hide Footer Social Links', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_footer',
			'settings'   => 'hawthorn_footer_share',
			'type'		 => 'checkbox',
			'priority'	 => 3
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_text_madeby',
		array(
			'label'      => esc_html__( 'Footer Text 1', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_footer',
			'settings'   => 'hawthorn_footer_text_madeby',
			'type'		 => 'text',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_text_copyright',
		array(
			'label'      => esc_html__( 'Footer Text 2', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_footer',
			'settings'   => 'hawthorn_footer_text_copyright',
			'type'		 => 'text',
			'priority'	 => 5
		)
	)
);

