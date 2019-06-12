<?php
//////////////////////////////////////////////////////////////////
// Set Content Width
//////////////////////////////////////////////////////////////////
if ( ! isset( $content_width ) )
	$content_width = 1100;
	
//////////////////////////////////////////////////////////////////
// Theme set up
//////////////////////////////////////////////////////////////////
add_action( 'after_setup_theme', 'hawthorn_theme_setup' );

if ( !function_exists('hawthorn_theme_setup') ) {

	function hawthorn_theme_setup() {
	
		// Register navigation menu
		register_nav_menus(
			array(
				'main-menu' => esc_html__('Primary Menu', 'hawthorn'),
			)
		);
		
		// Localization support
		load_theme_textdomain('hawthorn', get_template_directory() . '/lang');
		
		// Post Thumbnails
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'hawthorn-misc-thumb', 520, 400, true );
		add_image_size( 'hawthorn-grid-thumb', 520, 380, true );
		
		// Title tag
		add_theme_support( 'title-tag' );
		
		// Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );
		
		// Feed Links
		add_theme_support( 'automatic-feed-links' );
		
		// WooCommerce Support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		
		// Gutenberg
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'editor-style.css' );
		add_editor_style( hawthorn_fonts_url() );
		
	}

}

//////////////////////////////////////////////////////////////////
// Register & enqueue styles/scripts
//////////////////////////////////////////////////////////////////
// Register Fonts
function hawthorn_fonts_url() {
	$font_url = '';
	
	/*
	Translators: If there are characters in your language that are not supported
	by chosen font(s), translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'hawthorn' ) ) {
		$font_url = add_query_arg( 'family', urlencode( 'Barlow Semi Condensed:300,400,500,600,700,800,900&subset=latin-ext|Barlow:400,400i,500,500i,600,600i,700,700i&subset=latin-ext' ), "https://fonts.googleapis.com/css" );
	}
	return $font_url;
}

add_action( 'wp_enqueue_scripts','hawthorn_load_scripts' );

function hawthorn_load_scripts() {

	// Register scripts and styles
	wp_enqueue_style('hawthorn-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.3');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
	
	if(!get_theme_mod('hawthorn_responsive')) {
	wp_enqueue_style('hawthorn-responsive', get_template_directory_uri() . '/css/responsive.css');
	}
	
	wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/fitvids.js', array( 'jquery' ), '', true);
	wp_enqueue_script('hawthorn-scripts', get_template_directory_uri() . '/js/solopine.js', array( 'jquery' ), '', true);
	
	// Enqueue fonts
	wp_enqueue_style( 'hawthorn_fonts', hawthorn_fonts_url(), array(), '1.3' );
	
	if (is_singular() && get_option('thread_comments'))	wp_enqueue_script('comment-reply');
	
}

// Add customizer colors to Gutenberg editor
if(!function_exists('hawthorn_editor_style_customizer')) {
function hawthorn_editor_style_customizer() {
	wp_enqueue_style( 'hawthorn-editor-style-customizer', get_theme_file_uri( 'editor-style-customizer.css' ), false, '1.0', 'all' );
	wp_add_inline_style( 'hawthorn-editor-style-customizer', hawthorn_dynamic_customizer_css());
}
}
add_action( 'enqueue_block_editor_assets', 'hawthorn_editor_style_customizer' );

//////////////////////////////////////////////////////////////////
// Include files
//////////////////////////////////////////////////////////////////

// Theme Options
include( get_template_directory() . '/functions/sp_custom_controller.php');
include( get_template_directory() . '/functions/sp_customizer_settings.php');
include( get_template_directory() . '/functions/sp_customizer_style.php');

// Widgets

include( get_template_directory() . '/inc/widgets/about_widget.php');

include( get_template_directory() . '/inc/widgets/social_widget.php');
include( get_template_directory() . '/inc/widgets/promo_widget.php');
include( get_template_directory() . '/inc/widgets/facebook_widget.php');
include( get_template_directory() . '/inc/widgets/post_widget.php');

// TGM
include( get_template_directory() . '/hawthorn-tgm.php');

//////////////////////////////////////////////////////////////////
// Register widgets
//////////////////////////////////////////////////////////////////
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'hawthorn'),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Widgets here will appear vertically to the right of your content.', 'hawthorn'),
	));
	register_sidebar(array(
		'name' => esc_html__('Instagram Footer', 'hawthorn'),
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Use the "Instagram" widget here. IMPORTANT: For best result set number of photos to 8.', 'hawthorn'),
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 1', 'hawthorn'),
		'id' => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Widgets here will appear in Footer column 1', 'hawthorn'),
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 2', 'hawthorn'),
		'id' => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Widgets here will appear in Footer column 2', 'hawthorn'),
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 3', 'hawthorn'),
		'id' => 'sidebar-5',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Widgets here will appear in Footer column 3', 'hawthorn'),
	));
	register_sidebar(array(
		'name' => esc_html__('Footer 4', 'hawthorn'),
		'id' => 'sidebar-6',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Widgets here will appear in Footer column 5', 'hawthorn'),
	));
}

//////////////////////////////////////////////////////////////////
// One Click Demo
//////////////////////////////////////////////////////////////////
function hawthorn_ocdi_import_files() {
  return array(
  
	array(
      'import_file_name'             => 'Hawthorn w/ Demo Content',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/hawthorn-content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/hawthorn-widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/demo1/hawthorn-dark-customizer-content.dat',
    
      'import_preview_image_url'     => 'http://solopine.com/hawthorn/screenshots/demo1-screenshot.jpg',
      'import_notice'                => __( '<h4 style="font-size:20px;">Hawthorn Demo Content</h4>This option is NOT recommend if you already have content on your site. Only use this option if you want to include all the demo content (posts, categories, pages, menus).', 'hawthorn' ),
      'preview_url'                  => 'http://solopine.com/hawthorn',
    ),
	
	
  );
}
add_filter( 'pt-ocdi/import_files', 'hawthorn_ocdi_import_files' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

function hawthorn_ocdi_after_import( $selected_import ) {
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id,
		)
	);
}
add_action( 'pt-ocdi/after_import', 'hawthorn_ocdi_after_import' );

function hawthorn_ocdi_confirmation_dialog_options ( $options ) {
    return array_merge( $options, array(
        'width'       => 400,
    ) );
}
add_filter( 'pt-ocdi/confirmation_dialog_options', 'hawthorn_ocdi_confirmation_dialog_options', 10, 1 );

//////////////////////////////////////////////////////////////////
// COMMENTS LAYOUT
//////////////////////////////////////////////////////////////////
function hawthorn_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		
		<div class="thecomment">
					
			<div class="author-img">
				<?php echo get_avatar($comment,$args['avatar_size']); ?>
			</div>
			
			<div class="comment-text">
				<span class="reply">
					<?php comment_reply_link(array_merge( $args, array('reply_text' => esc_html__('Reply', 'hawthorn'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
					<?php edit_comment_link(esc_html__('Edit', 'hawthorn')); ?>
				</span>
				<h6 class="author"><?php echo get_comment_author_link(); ?></h6>
				<span class="date"><?php printf(esc_html__('%1$s at %2$s', 'hawthorn'), get_comment_date(),  get_comment_time()) ?></span>
				<?php if ($comment->comment_approved == '0') : ?>
					<em><i class="icon-info-sign"></i> <?php esc_html_e('Comment awaiting approval', 'hawthorn'); ?></em>
					<br />
				<?php endif; ?>
				<?php comment_text(); ?>
			</div>
					
		</div>
		
		
	</li>

	<?php 
}

//////////////////////////////////////////////////////////////////
// PAGINATION
//////////////////////////////////////////////////////////////////
function hawthorn_pagination() {
	
	?>
	<div class="sp-col-12">
		<div class="hawthorn-pagination">
			
			<div class="older"><?php next_posts_link(wp_kses( __( 'Older Posts <i class="fa fa-angle-right"></i>', 'hawthorn' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>
			<div class="newer"><?php previous_posts_link(wp_kses( __( '<i class="fa fa-angle-left"></i> Newer Posts', 'hawthorn' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>
			
		</div>
	</div>
					
	<?php
	
}

//////////////////////////////////////////////////////////////////
// THE EXCERPT
//////////////////////////////////////////////////////////////////
function hawthorn_custom_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'hawthorn_custom_excerpt_length', 999 );

function hawthorn_string_limit_words($string, $word_limit)
{
	$words = explode(' ', $string, ($word_limit + 1));
	
	if(count($words) > $word_limit) {
		array_pop($words);
	}
	
	return implode(' ', $words);
}

//////////////////////////////////////////////////////////////////
// ADD SPANS AROUND COUNT TEXT IN CATEGORY WIDGETS
//////////////////////////////////////////////////////////////////
function hawthorn_cat_count_span( $links ) {
	$links = str_replace( '</a> (', '</a><span class="sp-post-count">', $links );
	$links = str_replace( ')', '</span>', $links );
	return $links;
}
add_filter( 'wp_list_categories', 'hawthorn_cat_count_span' );

function hawthorn_archive_count_span( $links ) {
	$links = str_replace( '</a>&nbsp;(', '</a><span class="sp-post-count">', $links );
	$links = str_replace( ')', '</span>', $links );
	return $links;
}
add_filter( 'get_archives_link', 'hawthorn_archive_count_span' );

//////////////////////////////////////////////////////////////////
// WooCommerce functions
//////////////////////////////////////////////////////////////////

// Make sure WooCommerce is active
if ( class_exists( 'WooCommerce' ) ) {
	
	// Create WooCommerce sidebar-1
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('WooCommerce Sidebar', 'hawthorn'),
			'id' => 'sidebar-7',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
			'description' => esc_html__('Widgets here will appear on your WooCommerce shop and product pages.', 'hawthorn'),
		));
	}
	
	// Change number or products per row to 3
	add_filter('loop_shop_columns', 'loop_columns');
	if (!function_exists('loop_columns')) {
		function loop_columns() {
			return 3; // 3 products per row
		}
	}
	
	// Display 9 products per page.
	if(get_theme_mod('hawthorn_woo_per_page')) :
		$sp_products_per_page = get_theme_mod('hawthorn_woo_per_page');
	else :
		$sp_products_per_page = 9;
	endif;

	add_filter ('loop_shop_per_page', function ($cols) use ($sp_products_per_page) {return $sp_products_per_page;}, 20);
	
	// Remove rating from shop page
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
	
	// Set related products to 3
	function hawthorn_woo_related_products_limit() {
	  global $product;
		
		$args['posts_per_page'] = 3;
		return $args;
	}
	add_filter( 'woocommerce_output_related_products_args', 'hawthorn_related_products_args' );
	  function hawthorn_related_products_args( $args ) {
		$args['posts_per_page'] = 3; // 3 related products
		$args['columns'] = 3; // arranged in 3 columns
		return $args;
	}
	
	// Set upsell items to 3 columns
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );
	if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
		function woocommerce_output_upsells() {
			woocommerce_upsell_display( 3,3 ); // Display 3 products in rows of 3
		}
	}
	
	// Function for WooCommerce cart in top bar
	function hawthorn_header_cart_fragment() {
	 
		?>
		<div class="sp-shopping-cart">
		<?php $count = WC()->cart->cart_contents_count; ?>
			<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'hawthorn' ); ?>"><?php if ( $count >= 0 ) echo '<span class="sp-count">' . $count . '</span>'; ?></a>
		</div>
		<?php
	}

}