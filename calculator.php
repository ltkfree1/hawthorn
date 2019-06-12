<?php 
/** * Template Name: Calculator Tempate
* 
* @package Successful Startup
* @author Rajneesh Singh 
*/

// set full width layout
//add_filter ( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' ); 
// remove Genesis default loop
//remove_action( 'genesis_loop', 'genesis_do_loop' );
// add a custom loop
add_action( 'genesis_before_content', 'calculator_nav' );
function calculator_nav() {?>
<div class="calc_nav">

 <?php dynamic_sidebar('sidebar-7'); ?>
 </div>
 <div class="clearboth"></div>
</div>
 <?php }
genesis();
function genesis() {

	get_header();

	do_action( 'genesis_before_content_sidebar_wrap' );

	genesis_markup( array(
		'open'   => '<div %s>',
		'context' => 'content-sidebar-wrap',
	) );

		do_action( 'genesis_before_content' );
		genesis_markup( array(
			'open'   => '<main %s>',
			'context' => 'content',
		) );
			do_action( 'genesis_before_loop' );
			do_action( 'genesis_loop' );
			do_action( 'genesis_after_loop' );
		genesis_markup( array(
			'close' => '</main>', // End .content.
			'context' => 'content',
		) );
		do_action( 'genesis_after_content' );

	genesis_markup( array(
		'close'   => '</div>',
		'context' => 'content-sidebar-wrap',
	) );

	do_action( 'genesis_after_content_sidebar_wrap' );

	get_footer();

}
?>