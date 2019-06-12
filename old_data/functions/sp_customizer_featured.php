<?php
// Header Customizer Settings

// Add section
$wp_customize->add_section( 'hawthorn_new_section_featured' , array(
	'title'      => esc_html__( 'Featured Area Settings', 'hawthorn' ),
	'priority'   => 94,
) );

// Add Settings
$wp_customize->add_setting(
	'hawthorn_featured_slider',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_cat',
	array(
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_id',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_cat_hide',
	array(
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_title_hide',
	array(
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_excerpt_hide',
	array(
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_more_hide',
	array(
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_counter_hide',
	array(
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_featured_slider_slides',
	array(
		'default'     => '5',
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);


// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_slider',
		array(
			'label'      => esc_html__( 'Enable Featured Area', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_slider',
			'type'		 => 'checkbox',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Category_Control(
		$wp_customize,
		'featured_cat',
		array(
			'label'    => esc_html__( 'Select Featured Category', 'hawthorn' ),
			'settings' => 'hawthorn_featured_cat',
			'section'  => 'hawthorn_new_section_featured',
			'priority'	 => 2
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_id',
		array(
			'label'      => esc_html__( 'Select featured post/page IDs', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_id',
			'type'		 => 'text',
			'priority'	 => 4
		)
	)
);

$wp_customize->add_control(
	new Customize_Number_Control(
		$wp_customize,
		'featured_slider_slides',
		array(
			'label'      => esc_html__( 'Amount of slides', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_slider_slides',
			'type'		 => 'number',
			'priority'	 => 5
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_cat_hide',
		array(
			'label'      => esc_html__( 'Hide Categories', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_cat_hide',
			'type'		 => 'checkbox',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_title_hide',
		array(
			'label'      => esc_html__( 'Hide Post Title', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_title_hide',
			'type'		 => 'checkbox',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_excerpt_hide',
		array(
			'label'      => esc_html__( 'Hide Excerpt', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_excerpt_hide',
			'type'		 => 'checkbox',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_more_hide',
		array(
			'label'      => esc_html__( 'Hide Read More Button', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_more_hide',
			'type'		 => 'checkbox',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_counter_hide',
		array(
			'label'      => esc_html__( 'Hide Pagination Counter', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_featured',
			'settings'   => 'hawthorn_featured_counter_hide',
			'type'		 => 'checkbox',
			'priority'	 => 11
		)
	)
);