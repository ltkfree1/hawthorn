<?php
// WooCommerce Customizer Settings

// Add section
$wp_customize->add_section( 'hawthorn_new_section_woo' , array(
	'title'      => esc_html__( 'WooCommerce Settings', 'hawthorn' ),
	'description'=> esc_html__( 'WooCommerce theme related settings.', 'hawthorn' ),
	'priority'   => 100,
) );

// Add Settings

$wp_customize->add_setting(
	'hawthorn_woo_cart_icon',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_woo_layout',
	array(
		'default'     => 'fullwidth',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_woo_per_page',
	array(
		'default'     => 9,
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);

// Add Control

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'woo_cart_icon',
		array(
			'label'      => esc_html__( 'Hide Cart Icon in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_woo',
			'settings'   => 'hawthorn_woo_cart_icon',
			'type'		 => 'checkbox',
			'priority'	 => 1
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'woo_layout',
		array(
			'label'          => esc_html__( 'Shop Page Layout', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_woo',
			'settings'       => 'hawthorn_woo_layout',
			'type'           => 'radio',
			'priority'	 => 2,
			'choices'        => array(
				'sidebar'   => esc_html__( 'Sidebar Layout', 'hawthorn' ),
				'fullwidth'  => esc_html__( 'Full Width Layout', 'hawthorn' ),
			)
		)
	)
);

$wp_customize->add_control(
	new Customize_NumberMax_Control(
		$wp_customize,
		'woo_per_page',
		array(
			'label'      => esc_html__( 'Products Per Page', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_woo',
			'settings'   => 'hawthorn_woo_per_page',
			'type'		 => 'numbermax',
			'priority'	 => 3
		)
	)
);