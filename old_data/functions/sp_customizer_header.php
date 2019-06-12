<?php
// Header Customizer Settings

// Add section
$wp_customize->add_section( 'hawthorn_new_section_logo_header' , array(
	'title'      => esc_html__( 'Header & Logo Settings', 'hawthorn' ),
	'priority'   => 91,
) );

// Add Settings
$wp_customize->add_setting(
	'hawthorn_logo',
	array(
		'sanitize_callback'     => 'esc_url_raw'
	)
);
$wp_customize->add_setting(
	'hawthorn_header_padding_top',
	array(
		'default'     => '48',
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);
$wp_customize->add_setting(
	'hawthorn_header_padding_bottom',
	array(
		'default'     => '34',
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);
$wp_customize->add_setting(
	'hawthorn_header_padding_disable',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_header_hide_social',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_header_hide_search',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);


// Add Control
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'upload_logo',
		array(
			'label'      => esc_html__( 'Upload Logo', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_logo_header',
			'settings'   => 'hawthorn_logo',
			'priority'	 => 1
		)
	)
);

$wp_customize->add_control(
	new Customize_Number_Control(
		$wp_customize,
		'header_padding_top',
		array(
			'label'      => esc_html__( 'Header Logo Padding Top', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_logo_header',
			'settings'   => 'hawthorn_header_padding_top',
			'type'		 => 'number',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new Customize_Number_Control(
		$wp_customize,
		'header_padding_bottom',
		array(
			'label'      => esc_html__( 'Header Logo Padding Bottom', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_logo_header',
			'settings'   => 'hawthorn_header_padding_bottom',
			'type'		 => 'number',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_padding_disable',
		array(
			'label'      => esc_html__( 'Disable Header Padding', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_logo_header',
			'settings'   => 'hawthorn_header_padding_disable',
			'type'		 => 'checkbox',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_hide_social',
		array(
			'label'      => esc_html__( 'Hide Social Icons', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_logo_header',
			'settings'   => 'hawthorn_header_hide_social',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_hide_search',
		array(
			'label'      => esc_html__( 'Hide Search Icon', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_logo_header',
			'settings'   => 'hawthorn_header_hide_search',
			'type'		 => 'checkbox',
			'priority'	 => 13
		)
	)
);