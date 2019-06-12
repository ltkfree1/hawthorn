<?php
// General Customizer Settings

// Add section
$wp_customize->add_section( 'hawthorn_new_section_post' , array(
	'title'      => esc_html__( 'Post Settings', 'hawthorn' ),
	'priority'   => 96,
) );

// Add Settings

$wp_customize->add_setting(
	'hawthorn_post_layout',
	array(
		'default'     => 'post_sidebar',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_thumb',
	array(
		'default'     => 'display',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_cat',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_date',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_share_author',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_share',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_share_facebook',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_share_twitter',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_share_pinterest',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_share_google',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_comment_link',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_tags',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_related',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_related_date',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_post_pagination_hide',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);


// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_layout',
		array(
			'label'          => esc_html__( 'Set default post layout', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_post',
			'settings'       => 'hawthorn_post_layout',
			'type'           => 'radio',
			'priority'	 => 1,
			'choices'        => array(
				'post_sidebar'   => esc_html__( 'Post w/ Sidebar', 'hawthorn' ),
				'post_fullwidth'   => esc_html__( 'Full Width Post', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_thumb',
		array(
			'label'          => esc_html__( 'Featured Image (On Top of Post)', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_post',
			'settings'       => 'hawthorn_post_thumb',
			'type'           => 'radio',
			'priority'	 => 2,
			'choices'        => array(
				'display'   => esc_html__( 'Display Featured Image', 'hawthorn' ),
				'no_display'  => esc_html__( 'Hide Featured Image', 'hawthorn' ),
				'ho_display'  => esc_html__( 'Hide Featured Image only on single post pages', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_cat',
		array(
			'label'      => esc_html__( 'Hide Category', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_cat',
			'type'		 => 'checkbox',
			'priority'	 => 3
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_date',
		array(
			'label'      => esc_html__( 'Hide Date', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_date',
			'type'		 => 'checkbox',
			'priority'	 => 4
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share_author',
		array(
			'label'      => esc_html__( 'Hide Author Name', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_share_author',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share',
		array(
			'label'      => esc_html__( 'Hide All Share Buttons', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_share',
			'type'		 => 'checkbox',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share_facebook',
		array(
			'label'      => esc_html__( 'Hide Facebook Share Button', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_share_facebook',
			'type'		 => 'checkbox',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share_twitter',
		array(
			'label'      => esc_html__( 'Hide Twitter Share Button', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_share_twitter',
			'type'		 => 'checkbox',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share_pinterest',
		array(
			'label'      => esc_html__( 'Hide Pinterest Share Button', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_share_pinterest',
			'type'		 => 'checkbox',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share_google',
		array(
			'label'      => esc_html__( 'Hide Google+ Share Button', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_share_google',
			'type'		 => 'checkbox',
			'priority'	 => 14
		)
	)
);


$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_comment_link',
		array(
			'label'      => esc_html__( 'Hide Comment Link', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_comment_link',
			'type'		 => 'checkbox',
			'priority'	 => 16
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_tags',
		array(
			'label'      => esc_html__( 'Hide Tags', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_tags',
			'type'		 => 'checkbox',
			'priority'	 => 18
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_related',
		array(
			'label'      => esc_html__( 'Hide Related Posts Box', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_related',
			'type'		 => 'checkbox',
			'priority'	 => 20
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_related_date',
		array(
			'label'      => esc_html__( 'Hide Related Posts Date', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_related_date',
			'type'		 => 'checkbox',
			'priority'	 => 21
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_pagination_hide',
		array(
			'label'      => esc_html__( 'Hide Post Pagination', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_post',
			'settings'   => 'hawthorn_post_pagination_hide',
			'type'		 => 'checkbox',
			'priority'	 => 22
		)
	)
);