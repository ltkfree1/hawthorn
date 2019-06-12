<?php
// Social Media Customizer Settings

// Add section
$wp_customize->add_section( 'hawthorn_new_section_social' , array(
	'title'      => esc_html__( 'Social Media Settings', 'hawthorn' ),
	'priority'   => 95,
) );

// Add Settings
$wp_customize->add_setting(
	'hawthorn_facebook',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_facebook_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_facebook_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_twitter',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_twitter_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_twitter_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_instagram',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_instagram_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_instagram_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_pinterest',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_pinterest_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_pinterest_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_bloglovin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_bloglovin_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_bloglovin_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_tumblr',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_tumblr_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_tumblr_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_google',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_google_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_google_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_youtube',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_youtube_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_youtube_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_dribbble',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_dribbble_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_dribbble_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_soundcloud',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_soundcloud_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_soundcloud_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_vimeo',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_vimeo_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_vimeo_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_linkedin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_linkedin_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_linkedin_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_snapchat',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_snapchat_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_snapchat_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'hawthorn_rss',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_rss_header',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_rss_footer',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);


// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'facebook',
		array(
			'label'      => esc_html__( 'Facebook', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_facebook',
			'type'		 => 'text',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'facebook_header',
		array(
			'label'      => esc_html__( 'Show Facebook in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_facebook_header',
			'type'		 => 'checkbox',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'facebook_footer',
		array(
			'label'      => esc_html__( 'Show Facebook in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_facebook_footer',
			'type'		 => 'checkbox',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'twitter',
		array(
			'label'      => esc_html__( 'Twitter', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_twitter',
			'type'		 => 'text',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'twitter_header',
		array(
			'label'      => esc_html__( 'Show Twitter in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_twitter_header',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'twitter_footer',
		array(
			'label'      => esc_html__( 'Show Twitter in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_twitter_footer',
			'type'		 => 'checkbox',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram',
		array(
			'label'      => esc_html__( 'Instagram', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_instagram',
			'type'		 => 'text',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram_header',
		array(
			'label'      => esc_html__( 'Show Instagram in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_instagram_header',
			'type'		 => 'checkbox',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram_footer',
		array(
			'label'      => esc_html__( 'Show Instagram in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_instagram_footer',
			'type'		 => 'checkbox',
			'priority'	 => 9
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'pinterest',
		array(
			'label'      => esc_html__( 'Pinterest', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_pinterest',
			'type'		 => 'text',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'pinterest_header',
		array(
			'label'      => esc_html__( 'Show Pinterest in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_pinterest_header',
			'type'		 => 'checkbox',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'pinterest_footer',
		array(
			'label'      => esc_html__( 'Show Pinterest in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_pinterest_footer',
			'type'		 => 'checkbox',
			'priority'	 => 13
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bloglovin',
		array(
			'label'      => esc_html__( 'Bloglovin', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_bloglovin',
			'type'		 => 'text',
			'priority'	 => 14
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bloglovin_header',
		array(
			'label'      => esc_html__( 'Show Bloglovin in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_bloglovin_header',
			'type'		 => 'checkbox',
			'priority'	 => 15
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bloglovin_footer',
		array(
			'label'      => esc_html__( 'Show Bloglovin in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_bloglovin_footer',
			'type'		 => 'checkbox',
			'priority'	 => 16
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'google',
		array(
			'label'      => esc_html__( 'Google Plus', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_google',
			'type'		 => 'text',
			'priority'	 => 18
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'google_header',
		array(
			'label'      => esc_html__( 'Show Google in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_google_header',
			'type'		 => 'checkbox',
			'priority'	 => 19
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'google_footer',
		array(
			'label'      => esc_html__( 'Show Google in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_google_footer',
			'type'		 => 'checkbox',
			'priority'	 => 20
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'tumblr',
		array(
			'label'      => esc_html__( 'Tumblr', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_tumblr',
			'type'		 => 'text',
			'priority'	 => 22
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'tumblr_header',
		array(
			'label'      => esc_html__( 'Show Tumblr in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_tumblr_header',
			'type'		 => 'checkbox',
			'priority'	 => 23
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'tumblr_footer',
		array(
			'label'      => esc_html__( 'Show Tumblr in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_tumblr_footer',
			'type'		 => 'checkbox',
			'priority'	 => 24
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'youtube',
		array(
			'label'      => esc_html__( 'Youtube', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_youtube',
			'type'		 => 'text',
			'priority'	 => 26
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'youtube_header',
		array(
			'label'      => esc_html__( 'Show Youtube in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_youtube_header',
			'type'		 => 'checkbox',
			'priority'	 => 27
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'youtube_footer',
		array(
			'label'      => esc_html__( 'Show Youtube in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_youtube_footer',
			'type'		 => 'checkbox',
			'priority'	 => 28
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'dribbble',
		array(
			'label'      => esc_html__( 'Dribbble', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_dribbble',
			'type'		 => 'text',
			'priority'	 => 31
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'dribbble_header',
		array(
			'label'      => esc_html__( 'Show Dribbble in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_dribbble_header',
			'type'		 => 'checkbox',
			'priority'	 => 32
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'dribbble_footer',
		array(
			'label'      => esc_html__( 'Show Dribbble in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_dribbble_footer',
			'type'		 => 'checkbox',
			'priority'	 => 33
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'soundcloud',
		array(
			'label'      => esc_html__( 'Soundcloud', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_soundcloud',
			'type'		 => 'text',
			'priority'	 => 36
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'soundcloud_header',
		array(
			'label'      => esc_html__( 'Show Soundcloud in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_soubdcloud_header',
			'type'		 => 'checkbox',
			'priority'	 => 37
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'soundcloud_footer',
		array(
			'label'      => esc_html__( 'Show Soundcloud in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_soundcloud_footer',
			'type'		 => 'checkbox',
			'priority'	 => 38
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'vimeo',
		array(
			'label'      => esc_html__( 'Vimeo', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_vimeo',
			'type'		 => 'text',
			'priority'	 => 40
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'vimeo_header',
		array(
			'label'      => esc_html__( 'Show Vimeo in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_vimeo_header',
			'type'		 => 'checkbox',
			'priority'	 => 41
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'vimeo_footer',
		array(
			'label'      => esc_html__( 'Show Vimeo in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_vimeo_footer',
			'type'		 => 'checkbox',
			'priority'	 => 42
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'linkedin',
		array(
			'label'      => esc_html__( 'Linkedin (Use full URL to your Linkedin profile)', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_linkedin',
			'type'		 => 'text',
			'priority'	 => 45
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'linkedin_header',
		array(
			'label'      => esc_html__( 'Show Linkedin in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_linkedin_header',
			'type'		 => 'checkbox',
			'priority'	 => 46
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'linkedin_footer',
		array(
			'label'      => esc_html__( 'Show Linkedin in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_linkedin_footer',
			'type'		 => 'checkbox',
			'priority'	 => 47
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'snapchat',
		array(
			'label'      => esc_html__( 'Snapchat', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_snapchat',
			'type'		 => 'text',
			'priority'	 => 49
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'snapchat_header',
		array(
			'label'      => esc_html__( 'Show Snapchat in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_snapchat_header',
			'type'		 => 'checkbox',
			'priority'	 => 50
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'snapchat_footer',
		array(
			'label'      => esc_html__( 'Show Snapchat in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_snapchat_footer',
			'type'		 => 'checkbox',
			'priority'	 => 51
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'rss',
		array(
			'label'      => esc_html__( 'RSS Link', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_rss',
			'type'		 => 'text',
			'priority'	 => 53
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'rss_header',
		array(
			'label'      => esc_html__( 'Show RSS in Header', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_rss_header',
			'type'		 => 'checkbox',
			'priority'	 => 54
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'rss_footer',
		array(
			'label'      => esc_html__( 'Show RSS in Footer', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_social',
			'settings'   => 'hawthorn_rss_footer',
			'type'		 => 'checkbox',
			'priority'	 => 55
		)
	)
);
