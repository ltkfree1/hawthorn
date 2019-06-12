<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function hawthorn_customizer_style()
{
	wp_enqueue_style('hawthorn-customizer-css', get_stylesheet_directory_uri() . '/functions/css/customizer.css');
}
add_action('customize_controls_print_styles', 'hawthorn_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function hawthorn_register_theme_customizer( $wp_customize ) {
 	
	// Include all settings
	include( get_template_directory() . '/functions/sp_customizer_general.php');
	include( get_template_directory() . '/functions/sp_customizer_header.php');
	include( get_template_directory() . '/functions/sp_customizer_footer.php');
	include( get_template_directory() . '/functions/sp_customizer_featured.php');
	include( get_template_directory() . '/functions/sp_customizer_social.php');
	include( get_template_directory() . '/functions/sp_customizer_post.php');
	include( get_template_directory() . '/functions/sp_customizer_page.php');
	include( get_template_directory() . '/functions/sp_customizer_colors.php');
	if ( class_exists( 'WooCommerce' ) ) {
	include( get_template_directory() . '/functions/sp_customizer_woo.php');
	}
	
	// Remove Sections
	//$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	$wp_customize->remove_section( 'static_front_page');
 
}
add_action( 'customize_register', 'hawthorn_register_theme_customizer' );

/**
 * Sanitize
 */
function hawthorn_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}
function hawthorn_sanitize_number($input) {
    if ( isset( $input ) && is_numeric( $input ) ) {
        return $input;
    }
}

?>