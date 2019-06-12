<?php
// General Customizer Settings

// Add section
$wp_customize->add_section( 'hawthorn_new_section_general' , array(
	'title'      => esc_html__( 'General Settings', 'hawthorn' ),
	'priority'   => 90,
) );

// Add Settings
$wp_customize->add_setting(
	'hawthorn_responsive',
	array(
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_home_layout',
	array(
		'default'     => 'full',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_archive_layout',
	array(
		'default'     => 'full',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'hawthorn_sidebar_homepage',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_archive',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_post_summary',
	array(
		'default'     => 'excerpt',
		'sanitize_callback'     => 'wp_kses_post'
	)
);


// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'responsive',
		array(
			'label'      => esc_html__( 'Disable Responsive', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_general',
			'settings'   => 'hawthorn_responsive',
			'type'		 => 'checkbox',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'home_layout',
		array(
			'label'          => esc_html__( 'Homepage Layout', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_general',
			'settings'       => 'hawthorn_home_layout',
			'type'           => 'radio',
			'priority'	 => 3,
			'choices'        => array(
				'full'   => esc_html__( 'Full Post Layout', 'hawthorn' ),
				'grid'  => esc_html__( 'Grid Layout', 'hawthorn' ),
				'full_grid'  => esc_html__( '1 Full then Grid', 'hawthorn' ),
				'list'  => esc_html__( 'List Layout', 'hawthorn' ),
				'full_list'  => esc_html__( '1 Full then List', 'hawthorn' ),
				'list_alt'  => esc_html__( 'Alternating List Layout', 'hawthorn' ),
				'full_list_alt'  => esc_html__( '1 Full then Alternating List Layout', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'archive_layout',
		array(
			'label'          => esc_html__( 'Archive Layout', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_general',
			'settings'       => 'hawthorn_archive_layout',
			'type'           => 'radio',
			'priority'	 => 4,
			'choices'        => array(
				'full'   => esc_html__( 'Full Post Layout', 'hawthorn' ),
				'grid'  => esc_html__( 'Grid Layout', 'hawthorn' ),
				'full_grid'  => esc_html__( '1 Full then Grid', 'hawthorn' ),
				'list'  => esc_html__( 'List Layout', 'hawthorn' ),
				'full_list'  => esc_html__( '1 Full then List', 'hawthorn' ),
				'list_alt'  => esc_html__( 'Alternating List Layout', 'hawthorn' ),
				'full_list_alt'  => esc_html__( '1 Full then Alternating List Layout', 'hawthorn' ),
			)
		)
	)
);


$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sidebar_homepage',
		array(
			'label'      => esc_html__( 'Disable Sidebar on Homepage', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_general',
			'settings'   => 'hawthorn_sidebar_homepage',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sidebar_archive',
		array(
			'label'      => esc_html__( 'Disable Sidebar on Archive Pages', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_general',
			'settings'   => 'hawthorn_sidebar_archive',
			'type'		 => 'checkbox',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_summary',
		array(
			'label'          => esc_html__( 'Homepage/Archive Post Summary Type', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_general',
			'settings'       => 'hawthorn_post_summary',
			'type'           => 'radio',
			'priority'	 => 8,
			'choices'        => array(
				'excerpt'  => esc_html__( 'Use Excerpt', 'hawthorn' ),
				'full'   => esc_html__( 'Use Read More Tag', 'hawthorn' ),
			)
		)
	)
);