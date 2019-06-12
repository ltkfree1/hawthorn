<?php
// Colors Customizer Settings

// ** Add section ** //
$wp_customize->add_panel( 'panel_color', array(
	'priority'       => 97,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Color and Style Settings', 'hawthorn' ),
) );
	
	$wp_customize->add_section( 'hawthorn_new_section_color_background' , array(
		'title'      => esc_html__( 'Background', 'hawthorn' ),
		'description'=> '',
		'priority'   => 2,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'hawthorn_new_section_color_header' , array(
		'title'      => esc_html__( 'Header Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 4,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'hawthorn_new_section_color_nav' , array(
		'title'      => esc_html__( 'Navigation Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 6,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'hawthorn_new_section_color_mobile_menu' , array(
		'title'      => esc_html__( 'Mobile Menu Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 8,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'hawthorn_new_section_color_featured' , array(
		'title'      => esc_html__( 'Featured Area Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 10,
		'panel'  => 'panel_color',
	) );
	$wp_customize->add_section( 'hawthorn_new_section_color_post' , array(
		'title'      => esc_html__( 'Post/Page Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 13,
		'panel'  => 'panel_color',
	) );
	$wp_customize->add_section( 'hawthorn_new_section_color_sidebar' , array(
		'title'      => esc_html__( 'Sidebar Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 16,
		'panel'  => 'panel_color',
	) );
	$wp_customize->add_section( 'hawthorn_new_section_color_footer' , array(
		'title'      => esc_html__( 'Footer Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 19,
		'panel'  => 'panel_color',
	) );
	$wp_customize->add_section( 'hawthorn_new_section_color_newsletter_color' , array(
		'title'      => esc_html__( 'Newsletter Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 21,
		'panel'  => 'panel_color',
	) );
	$wp_customize->add_section( 'hawthorn_new_section_color_misc' , array(
		'title'      => esc_html__( 'MISC Colors', 'hawthorn' ),
		'description'=> '',
		'priority'   => 23,
		'panel'  => 'panel_color',
	) );
	
// ** Add Settings ** //

// Background
$wp_customize->add_setting(
	'hawthorn_background_color',
	array(
		'default'     => '#f8f8f8',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_background_bg_image',
	array(
	'sanitize_callback'     => 'esc_url_raw'
	)
);

$wp_customize->add_setting(
	'hawthorn_background_bg_repeat',
	array(
		'default'     => 'repeat',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_background_bg_size',
	array(
		'default'     => 'auto',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_background_bg_position',
	array(
		'default'     => 'center center',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'hawthorn_background_bg_attachment',
	array(
		'default'     => 'scroll',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

// Header
$wp_customize->add_setting(
	'hawthorn_header_bg_color',
	array(
		'default'     => '#f8f8f8',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_header_bg_image',
	array(
	'sanitize_callback'     => 'esc_url_raw'
	)
);

$wp_customize->add_setting(
	'hawthorn_header_bg_repeat',
	array(
		'default'     => 'repeat',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'hawthorn_header_bg_size',
	array(
		'default'     => 'auto',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'hawthorn_header_bg_position',
	array(
		'default'     => 'center center',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'hawthorn_header_bg_attachment',
	array(
		'default'     => 'scroll',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'hawthorn_header_social_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_header_social_color_hover',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_header_search_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_header_search_color_hover',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_header_cart_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_header_cart_counter',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Navigation
$wp_customize->add_setting(
	'hawthorn_nav_bg',
	array(
		'default'     => '#f8f8f8',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_line',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_text_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_text_color_hover',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_drop_arrow',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_shadow',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_shadow_opacity',
	array(
		'default'     => '0.05',
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_margin_bottom',
	array(
		'default'     => '45',
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);

$wp_customize->add_setting(
	'hawthorn_nav_dropdown_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_dropdown_border',
	array(
		'default'     => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_dropdown_text_color',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_dropdown_text_hover_bg',
	array(
		'default'     => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_nav_dropdown_text_hover_color',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Mobile
$wp_customize->add_setting(
	'hawthorn_mobile_topbar',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_show',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_show_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_burger',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_setting(
	'hawthorn_mobile_dropdown_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_dropdown_border',
	array(
		'default'     => '#e4e4e4',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_dropdown_text',
	array(
		'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_dropdown_text_hover',
	array(
		'default'     => '#333333',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_dropdown_text_bg_hover',
	array(
		'default'     => '#f7f7f7',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_mobile_header_padding_bottom',
	array(
		'default'     => '20',
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);

// Featured Area
$wp_customize->add_setting(
	'hawthorn_color_featured_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_cat',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_title',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_excerpt',
	array(
		'default'     => '#bbbbbb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_button_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_button_border',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_button_text',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_button_bg_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_button_border_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_button_text_hover',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_pagi_text',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_pagi_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_color_featured_pagi_count',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Post Colors //
$wp_customize->add_setting(
	'hawthorn_post_color_title',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_cat',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_date',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_text',
	array(
		'default'     => '#222222',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_text_heading',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_tag_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_tag_text',
	array(
		'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_tag_bg_hover',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_tag_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_meta_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_meta_author',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_meta_share',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_color_meta_comments',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_quote_border',
	array(
		'default'     => '#dddddd',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_quote_text',
	array(
		'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_comment_button_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_comment_button_text',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_comment_button_bg_hover',
	array(
		'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_post_comment_button_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Sidebar Colors
$wp_customize->add_setting(
	'hawthorn_sidebar_color_title_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_title_text',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_title_shadow',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_title_shadow_opacity',
	array(
		'default'     => '0.08',
		'sanitize_callback'     => 'hawthorn_sanitize_number'
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_social_bg',
	array(
		'default'     => '#e6e6e6',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_social_text',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_social_bg_hover',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_social_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_post_count_bg',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_sidebar_color_post_count_text',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Footer Colors
$wp_customize->add_setting(
	'hawthorn_footer_color_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer_color_widget_title',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer_color_widget_lists',
	array(
		'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer_color_widget_links',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer_color_widget_text',
	array(
		'default'     => '#222222',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer_color_widget_post_links',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_setting(
	'hawthorn_footer2_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_social_icon',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_social_icon_text',
	array(
		'default'     => '#777777',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_social_icon_hover',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_social_icon_text_hover',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_social_separator_line',
	array(
		'default'     => '#202020',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_madeby_text',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_madeby_icon',
	array(
		'default'     => '#e84142',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_copy_text',
	array(
		'default'     => '#666666',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_footer2_copy_link',
	array(
		'default'     => '#aaaaaa',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Newsletter
$wp_customize->add_setting(
	'hawthorn_newsletter_color_bg',
	array(
		'default'     => '#e8e8e8',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_newsletter_color_title',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_newsletter_color_subtitle',
	array(
		'default'     => '#777777',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_newsletter_color_input_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_newsletter_color_input_text',
	array(
		'default'     => '#888888',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_newsletter_color_mail_white',
	array(
		'default'     => false,
		'sanitize_callback'     => 'hawthorn_sanitize_checkbox'
	)
);

// Misc
$wp_customize->add_setting(
	'hawthorn_misc_color_accent',
	array(
		'default'     => '#c3a26e',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_misc_pagination_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_misc_pagination_text',
	array(
		'default'     => '#777777',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_misc_pagination_bg_hover',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_misc_pagination_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_setting(
	'hawthorn_misc_cat_bg',
	array(
		'default'     => '#040404',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_misc_cat_title',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_misc_cat_description',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'hawthorn_misc_cat_browsing',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);


// ** Add Control ** //

// Background
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'background_color',
		array(
			'label'      => esc_html__( 'Background Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_background',
			'settings'   => 'hawthorn_background_color',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'background_bg_image',
		array(
			'label'      => esc_html__( 'Background Image', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_background',
			'settings'   => 'hawthorn_background_bg_image',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'background_bg_repeat',
		array(
			'label'          => esc_html__( 'Background Repeat', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_background',
			'settings'       => 'hawthorn_background_bg_repeat',
			'type'           => 'select',
			'priority'	 => 3,
			'choices'        => array(
				'repeat'   => esc_html__( 'Repeat', 'hawthorn' ),
				'no-repeat'  => esc_html__( 'No Repeat', 'hawthorn' ),
				'repeat-y'  => esc_html__( 'Repeat Y', 'hawthorn' ),
				'repeat-x'  => esc_html__( 'Repeat X', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'background_bg_size',
		array(
			'label'          => esc_html__( 'Background Size', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_background',
			'settings'       => 'hawthorn_background_bg_size',
			'type'           => 'select',
			'priority'	 => 5,
			'choices'        => array(
				'auto'   => esc_html__( 'Auto', 'hawthorn' ),
				'cover'  => esc_html__( 'Cover', 'hawthorn' ),
				'contain'  => esc_html__( 'Contain', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'background_bg_position',
		array(
			'label'          => esc_html__( 'Background Position', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_background',
			'settings'       => 'hawthorn_background_bg_position',
			'type'           => 'select',
			'priority'	 => 6,
			'choices'        => array(
				'center center'   => esc_html__( 'Center Center', 'hawthorn' ),
				'center top'  => esc_html__( 'Center Top', 'hawthorn' ),
				'center bottom'  => esc_html__( 'Center Bottom', 'hawthorn' ),
				'right center'  => esc_html__( 'Right Center', 'hawthorn' ),
				'right top'  => esc_html__( 'Right Top', 'hawthorn' ),
				'right bottom'  => esc_html__( 'Right Bottom', 'hawthorn' ),
				'left center'  => esc_html__( 'Left Center', 'hawthorn' ),
				'left top'  => esc_html__( 'Left Top', 'hawthorn' ),
				'left bottom'  => esc_html__( 'Left Bottom', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'background_bg_attachment',
		array(
			'label'          => esc_html__( 'Background Attachment', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_background',
			'settings'       => 'hawthorn_background_bg_attachment',
			'type'           => 'select',
			'priority'	 => 7,
			'choices'        => array(
				'scroll'   => esc_html__( 'Scroll', 'hawthorn' ),
				'fixed'  => esc_html__( 'Fixed', 'hawthorn' ),
			)
		)
	)
);

// Header
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_bg_color',
		array(
			'label'      => esc_html__( 'Header BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_bg_color',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'header_bg_image',
		array(
			'label'      => esc_html__( 'Header BG Image', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_bg_image',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_bg_repeat',
		array(
			'label'          => esc_html__( 'Header BG Repeat', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_header',
			'settings'       => 'hawthorn_header_bg_repeat',
			'type'           => 'select',
			'priority'	 => 3,
			'choices'        => array(
				'repeat'   => esc_html__( 'Repeat', 'hawthorn' ),
				'no-repeat'  => esc_html__( 'No Repeat', 'hawthorn' ),
				'repeat-y'  => esc_html__( 'Repeat Y', 'hawthorn' ),
				'repeat-x'  => esc_html__( 'Repeat X', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_bg_size',
		array(
			'label'          => esc_html__( 'Header BG Size', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_header',
			'settings'       => 'hawthorn_header_bg_size',
			'type'           => 'select',
			'priority'	 => 5,
			'choices'        => array(
				'auto'   => esc_html__( 'Auto', 'hawthorn' ),
				'cover'  => esc_html__( 'Cover', 'hawthorn' ),
				'contain'  => esc_html__( 'Contain', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_bg_position',
		array(
			'label'          => esc_html__( 'Header BG Position', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_header',
			'settings'       => 'hawthorn_header_bg_position',
			'type'           => 'select',
			'priority'	 => 6,
			'choices'        => array(
				'center center'   => esc_html__( 'Center Center', 'hawthorn' ),
				'center top'  => esc_html__( 'Center Top', 'hawthorn' ),
				'center bottom'  => esc_html__( 'Center Bottom', 'hawthorn' ),
				'right center'  => esc_html__( 'Right Center', 'hawthorn' ),
				'right top'  => esc_html__( 'Right Top', 'hawthorn' ),
				'right bottom'  => esc_html__( 'Right Bottom', 'hawthorn' ),
				'left center'  => esc_html__( 'Left Center', 'hawthorn' ),
				'left top'  => esc_html__( 'Left Top', 'hawthorn' ),
				'left bottom'  => esc_html__( 'Left Bottom', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_bg_attachment',
		array(
			'label'          => esc_html__( 'Header BG Attachment', 'hawthorn' ),
			'section'        => 'hawthorn_new_section_color_header',
			'settings'       => 'hawthorn_header_bg_attachment',
			'type'           => 'select',
			'priority'	 => 7,
			'choices'        => array(
				'scroll'   => esc_html__( 'Scroll', 'hawthorn' ),
				'fixed'  => esc_html__( 'Fixed', 'hawthorn' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_color',
		array(
			'label'      => esc_html__( 'Social Icon Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_social_color',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_color_hover',
		array(
			'label'      => esc_html__( 'Social Icon Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_social_color_hover',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_search_color',
		array(
			'label'      => esc_html__( 'Search Icon Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_search_color',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_search_color_hover',
		array(
			'label'      => esc_html__( 'Social Icon Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_search_color_hover',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_cart_color',
		array(
			'label'      => esc_html__( 'WooCommerce Cart Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_cart_color',
			'priority'	 => 15
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_cart_counter',
		array(
			'label'      => esc_html__( 'WooCommerce Cart Counter Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_header',
			'settings'   => 'hawthorn_header_cart_counter',
			'priority'	 => 15
		)
	)
);

// Navigation
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_bg',
		array(
			'label'      => esc_html__( 'Navigation BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_bg',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_line',
		array(
			'label'      => esc_html__( 'Navigation Line Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_line',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_text_color',
		array(
			'label'      => esc_html__( 'Navigation Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_text_color',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_text_color_hover',
		array(
			'label'      => esc_html__( 'Navigation Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_text_color_hover',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_drop_arrow',
		array(
			'label'      => esc_html__( 'Navigation Dropdown Arrow Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_drop_arrow',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'nav_shadow',
		array(
			'label'      => esc_html__( 'Enable Navigation Bottom Shadow', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_shadow',
			'type'		 => 'checkbox',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new Customize_Number2_Control(
		$wp_customize,
		'nav_shadow_opacity',
		array(
			'label'      => esc_html__( 'Navigation Bottom Shadow Opacity (0.0 - 1.0)', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_shadow_opacity',
			'type'		 => 'number',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new Customize_Number_Control(
		$wp_customize,
		'nav_margin_bottom',
		array(
			'label'      => esc_html__( 'Navigation Margin Bottom', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_margin_bottom',
			'type'		 => 'number',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_dropdown_bg',
		array(
			'label'      => esc_html__( 'Dropdown BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_dropdown_bg',
			'priority'	 => 14
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_dropdown_border',
		array(
			'label'      => esc_html__( 'Dropdown Border Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_dropdown_border',
			'priority'	 => 16
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_dropdown_text_color',
		array(
			'label'      => esc_html__( 'Dropdown Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_dropdown_text_color',
			'priority'	 => 18
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_dropdown_text_hover_bg',
		array(
			'label'      => esc_html__( 'Dropdown Text Hover BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_dropdown_text_hover_bg',
			'priority'	 => 20
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'nav_dropdown_text_hover_color',
		array(
			'label'      => esc_html__( 'Dropdown Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_nav',
			'settings'   => 'hawthorn_nav_dropdown_text_hover_color',
			'priority'	 => 22
		)
	)
);

// Mobile menu
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_topbar',
		array(
			'label'      => esc_html__( 'Mobile Top Bar BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_topbar',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_show',
		array(
			'label'      => esc_html__( 'Show Menu Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_show',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_show_hover',
		array(
			'label'      => esc_html__( 'Show Menu Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_show_hover',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_burger',
		array(
			'label'      => esc_html__( 'Mobile Menu Toggle Icon Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_burger',
			'priority'	 => 7
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_bg',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_dropdown_bg',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_border',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Border Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_dropdown_border',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_text',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_dropdown_text',
			'priority'	 => 14
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_text_hover',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_dropdown_text_hover',
			'priority'	 => 16
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_text_bg_hover',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Text BG Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_dropdown_text_bg_hover',
			'priority'	 => 19
		)
	)
);
$wp_customize->add_control(
	new Customize_Number_Control(
		$wp_customize,
		'mobile_header_padding_bottom',
		array(
			'label'      => esc_html__( 'Additional Header Padding Bottom on Mobile Devices', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_mobile_menu',
			'settings'   => 'hawthorn_mobile_header_padding_bottom',
			'priority'	 => 19,
			'type'		 => 'number'
		)
	)
);

// Featured Area
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_bg',
		array(
			'label'      => esc_html__( 'Featured Area BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_bg',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_cat',
		array(
			'label'      => esc_html__( 'Featured Area Category Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_cat',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_title',
		array(
			'label'      => esc_html__( 'Featured Area Title Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_title',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_excerpt',
		array(
			'label'      => esc_html__( 'Featured Area Excerpt Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_excerpt',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_button_bg',
		array(
			'label'      => esc_html__( 'Featured Area Button BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_button_bg',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_button_border',
		array(
			'label'      => esc_html__( 'Featured Area Button Border Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_button_border',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_button_text',
		array(
			'label'      => esc_html__( 'Featured Area Button Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_button_text',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_button_bg_hover',
		array(
			'label'      => esc_html__( 'Featured Area Button BG Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_button_bg_hover',
			'priority'	 => 15
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_button_border_hover',
		array(
			'label'      => esc_html__( 'Featured Area Button Border Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_button_border_hover',
			'priority'	 => 17
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_button_text_hover',
		array(
			'label'      => esc_html__( 'Featured Area Button Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_button_text_hover',
			'priority'	 => 19
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_pagi_text',
		array(
			'label'      => esc_html__( 'Featured Area Pagination Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_pagi_text',
			'priority'	 => 21
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_pagi_text_hover',
		array(
			'label'      => esc_html__( 'Featured Area Pagination Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_pagi_text_hover',
			'priority'	 => 23
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'color_featured_pagi_count',
		array(
			'label'      => esc_html__( 'Featured Area Pagination Count', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_featured',
			'settings'   => 'hawthorn_color_featured_pagi_count',
			'priority'	 => 25
		)
	)
);

// Post Colors
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_title',
		array(
			'label'      => esc_html__( 'Post/Page Title Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_title',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_cat',
		array(
			'label'      => esc_html__( 'Post Category Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_cat',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_date',
		array(
			'label'      => esc_html__( 'Post Date Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_date',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_text',
		array(
			'label'      => esc_html__( 'Post/Page Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_text',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_text_heading',
		array(
			'label'      => esc_html__( 'Post/Page Headings (H1-H6) Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_text_heading',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_bg',
		array(
			'label'      => esc_html__( 'Tag BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_tag_bg',
			'priority'	 => 15
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_text',
		array(
			'label'      => esc_html__( 'Tag Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_tag_text',
			'priority'	 => 18
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_bg_hover',
		array(
			'label'      => esc_html__( 'Tag BG Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_tag_bg_hover',
			'priority'	 => 21
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_text_hover',
		array(
			'label'      => esc_html__( 'Tag Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_tag_text_hover',
			'priority'	 => 24
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_meta_bg',
		array(
			'label'      => esc_html__( 'Post Meta Box BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_meta_bg',
			'priority'	 => 27
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_meta_author',
		array(
			'label'      => esc_html__( 'Post Meta Box Author Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_meta_author',
			'priority'	 => 27
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_meta_share',
		array(
			'label'      => esc_html__( 'Post Meta Box Share Icon Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_meta_share',
			'priority'	 => 29
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_meta_comments',
		array(
			'label'      => esc_html__( 'Post Meta Box Comments Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_color_meta_comments',
			'priority'	 => 31
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_quote_border',
		array(
			'label'      => esc_html__( 'Post/Page Blockquote Border Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_quote_border',
			'priority'	 => 34
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_quote_text',
		array(
			'label'      => esc_html__( 'Post/Page Blockquote Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_quote_text',
			'priority'	 => 37
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_bg',
		array(
			'label'      => esc_html__( 'Comment Button BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_comment_button_bg',
			'priority'	 => 40
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_text',
		array(
			'label'      => esc_html__( 'Comment Button Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_comment_button_text',
			'priority'	 => 43
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_bg_hover',
		array(
			'label'      => esc_html__( 'Comment Button BG Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_comment_button_bg_hover',
			'priority'	 => 46
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_text_hover',
		array(
			'label'      => esc_html__( 'Comment Button Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_post',
			'settings'   => 'hawthorn_post_comment_button_text_hover',
			'priority'	 => 49
		)
	)
);

// Sidebar
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_title_bg',
		array(
			'label'      => esc_html__( 'Widget Title BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_title_bg',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_title_text',
		array(
			'label'      => esc_html__( 'Widget Title Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_title_text',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sidebar_color_title_shadow',
		array(
			'label'      => esc_html__( 'Disable Widget Title Shadow', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_title_shadow',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new Customize_Number2_Control(
		$wp_customize,
		'sidebar_color_title_shadow_opacity',
		array(
			'label'      => esc_html__( 'Widget Title Shadow Opacity (0.0 - 1.0)', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_title_shadow_opacity',
			'type'		 => 'number',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_social_bg',
		array(
			'label'      => esc_html__( 'Social Widget Icon BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_social_bg',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_social_text',
		array(
			'label'      => esc_html__( 'Social Widget Icon Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_social_text',
			'priority'	 => 15
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_social_bg_hover',
		array(
			'label'      => esc_html__( 'Social Widget Icon BG Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_social_bg_hover',
			'priority'	 => 18
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_social_text_hover',
		array(
			'label'      => esc_html__( 'Social Widget Icon Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_social_text_hover',
			'priority'	 => 21
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_post_count_bg',
		array(
			'label'      => esc_html__( 'Post Widget Counter BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_post_count_bg',
			'priority'	 => 24
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_post_count_text',
		array(
			'label'      => esc_html__( 'Post Widget Counter Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_sidebar',
			'settings'   => 'hawthorn_sidebar_color_post_count_text',
			'priority'	 => 27
		)
	)
);



// Footer Colors
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_bg',
		array(
			'label'      => esc_html__( 'Footer BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer_color_bg',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_widget_title',
		array(
			'label'      => esc_html__( 'Footer Widget Title Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer_color_widget_title',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_widget_lists',
		array(
			'label'      => esc_html__( 'Footer Widget Lists (link) Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer_color_widget_lists',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_widget_links',
		array(
			'label'      => esc_html__( 'Footer Widget Link Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer_color_widget_links',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_widget_post_links',
		array(
			'label'      => esc_html__( 'Footer Post Widget Link Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer_color_widget_post_links',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_widget_text',
		array(
			'label'      => esc_html__( 'Footer Widget Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer_color_widget_text',
			'priority'	 => 12
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_bg',
		array(
			'label'      => esc_html__( 'Second Footer BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_bg',
			'priority'	 => 15
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_social_icon',
		array(
			'label'      => esc_html__( 'Second Footer Social Icon Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_social_icon',
			'priority'	 => 18
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_social_icon_text',
		array(
			'label'      => esc_html__( 'Second Footer Social Icon Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_social_icon_text',
			'priority'	 => 21
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_social_icon_hover',
		array(
			'label'      => esc_html__( 'Second Footer Social Icon Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_social_icon_hover',
			'priority'	 => 24
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_social_icon_text_hover',
		array(
			'label'      => esc_html__( 'Second Footer Social Icon Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_social_icon_text_hover',
			'priority'	 => 28
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_social_separator_line',
		array(
			'label'      => esc_html__( 'Second Footer Social Separator Line Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_social_separator_line',
			'priority'	 => 32
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_madeby_text',
		array(
			'label'      => esc_html__( 'Second Footer Made By text color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_madeby_text',
			'priority'	 => 35
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_madeby_icon',
		array(
			'label'      => esc_html__( 'Second Footer Made By Icon color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_madeby_icon',
			'priority'	 => 38
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_copy_text',
		array(
			'label'      => esc_html__( 'Second Footer Copyright Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_copy_text',
			'priority'	 => 41
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer2_copy_link',
		array(
			'label'      => esc_html__( 'Second Footer Copyright Link Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_footer',
			'settings'   => 'hawthorn_footer2_copy_link',
			'priority'	 => 44
		)
	)
);

// Newsletter
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_color_bg',
		array(
			'label'      => esc_html__( 'Newsletter Widget BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_newsletter_color',
			'settings'   => 'hawthorn_newsletter_color_bg',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_color_title',
		array(
			'label'      => esc_html__( 'Newsletter Widget Title Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_newsletter_color',
			'settings'   => 'hawthorn_newsletter_color_title',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_color_subtitle',
		array(
			'label'      => esc_html__( 'Newsletter Widget Sub-Title Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_newsletter_color',
			'settings'   => 'hawthorn_newsletter_color_subtitle',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_color_input_bg',
		array(
			'label'      => esc_html__( 'Newsletter Widget Input BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_newsletter_color',
			'settings'   => 'hawthorn_newsletter_color_input_bg',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_color_input_text',
		array(
			'label'      => esc_html__( 'Newsletter Widget Input Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_newsletter_color',
			'settings'   => 'hawthorn_newsletter_color_input_text',
			'priority'	 => 16
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'newsletter_color_mail_white',
		array(
			'label'      => esc_html__( 'Use White Mail Icon', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_newsletter_color',
			'settings'   => 'hawthorn_newsletter_color_mail_white',
			'type'		 => 'checkbox',
			'priority'	 => 19
		)
	)
);

// Misc
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_color_accent',
		array(
			'label'      => esc_html__( 'Accent Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_color_accent',
			'priority'	 => 3
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_bg',
		array(
			'label'      => esc_html__( 'Pagination BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_pagination_bg',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_text',
		array(
			'label'      => esc_html__( 'Pagination Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_pagination_text',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_bg_hover',
		array(
			'label'      => esc_html__( 'Pagination BG Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_pagination_bg_hover',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_text_hover',
		array(
			'label'      => esc_html__( 'Pagination Text Hover Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_pagination_text_hover',
			'priority'	 => 16
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_cat_bg',
		array(
			'label'      => esc_html__( 'Category Page Title BG Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_cat_bg',
			'priority'	 => 17
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_cat_title',
		array(
			'label'      => esc_html__( 'Category Page Title Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_cat_title',
			'priority'	 => 19
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_cat_browsing',
		array(
			'label'      => esc_html__( 'Category Page Browsing Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_cat_browsing',
			'priority'	 => 20
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_cat_description',
		array(
			'label'      => esc_html__( 'Category Page Description Text Color', 'hawthorn' ),
			'section'    => 'hawthorn_new_section_color_misc',
			'settings'   => 'hawthorn_misc_cat_description',
			'priority'	 => 22
		)
	)
);
