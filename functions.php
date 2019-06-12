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
		
	}

}

//////////////////////////////////////////////////////////////////
// Register & enqueue styles/scripts
//////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts','hawthorn_load_scripts' );

function hawthorn_load_scripts() {

	// Register scripts and styles
	wp_enqueue_style('hawthorn-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
	
	if(!get_theme_mod('hawthorn_responsive')) {
	wp_enqueue_style('hawthorn-responsive', get_template_directory_uri() . '/css/responsive.css');
	}
	
	wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/fitvids.js', array( 'jquery' ), '', true);
	wp_enqueue_script('hawthorn-scripts', get_template_directory_uri() . '/js/solopine.js', array( 'jquery' ), '', true);
	
	// Register Fonts
	function hawthorn_fonts_url() {
		$font_url = '';
		
		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'hawthorn' ) ) {
			$font_url = add_query_arg( 'family', urlencode( 'Barlow Semi Condensed:300,400,500,600,700,800,900&subset=latin-ext|Barlow:400,400i,500,500i,600,600i,700,700i&subset=latin-ext' ), "//fonts.googleapis.com/css" );
		}
		return $font_url;
	}
	// Enqueue fonts
	wp_enqueue_style( 'hawthorn_fonts', hawthorn_fonts_url(), array(), '1.0.0' );
	
	if (is_singular() && get_option('thread_comments'))	wp_enqueue_script('comment-reply');
	
}

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
		'before_widget' => '<div id="%1$s" class="instagram-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="instagram-title">',
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
		register_sidebar(array(
		'name' => esc_html__('Calculater', 'hawthorn'),
		'id' => 'sidebar-7',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Widgets here will appear in Calculater page', 'hawthorn'),
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
// Get social icons
//////////////////////////////////////////////////////////////////

function hawthorn_get_social_icons() { ?>
	<?php if(get_theme_mod('hawthorn_facebook')) : ?><?php if(get_theme_mod('hawthorn_facebook_header')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('hawthorn_facebook')); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_twitter')) : ?><?php if(get_theme_mod('hawthorn_twitter_header')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('hawthorn_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_instagram')) : ?><?php if(get_theme_mod('hawthorn_instagram_header')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('hawthorn_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_pinterest')) : ?><?php if(get_theme_mod('hawthorn_pinterest_header')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('hawthorn_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_bloglovin')) : ?><?php if(get_theme_mod('hawthorn_bloglovin_header')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('hawthorn_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_google')) : ?><?php if(get_theme_mod('hawthorn_google_header')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('hawthorn_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_tumblr')) : ?><?php if(get_theme_mod('hawthorn_tumblr_header')) : ?><a href="http://<?php echo esc_html(get_theme_mod('hawthorn_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_youtube')) : ?><?php if(get_theme_mod('hawthorn_youtube_header')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('hawthorn_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_dribbble')) : ?><?php if(get_theme_mod('hawthorn_dribbble_header')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('hawthorn_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_soundcloud')) : ?><?php if(get_theme_mod('hawthorn_soundcloud_header')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('hawthorn_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_vimeo')) : ?><?php if(get_theme_mod('hawthorn_vimeo_header')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('hawthorn_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_linkedin')) : ?><?php if(get_theme_mod('hawthorn_linkedin_header')) : ?><a href="<?php echo esc_html(get_theme_mod('hawthorn_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_snapchat')) : ?><?php if(get_theme_mod('hawthorn_snapchat_header')) : ?><a href="http://snapchat.com/add/<?php echo esc_html(get_theme_mod('hawthorn_snapchat')); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i></a><?php endif; ?><?php endif; ?>
	<?php if(get_theme_mod('hawthorn_rss')) : ?><?php if(get_theme_mod('hawthorn_rss_header')) : ?><a href="<?php echo esc_url(get_theme_mod('hawthorn_rss')); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?><?php endif; ?>
<?php }

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
// TWITTER AMPERSAND ENTITY DECODE
//////////////////////////////////////////////////////////////////
function hawthorn_social_title( $title ) {
    $title = html_entity_decode( $title );
    $title = urlencode( $title );
    return $title;
}

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

	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return '.$sp_products_per_page.';' ), 20 );
	
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
add_shortcode('_before_content_sidebar_wrap', '_before_content_sidebar_wrap');
function _before_content_sidebar_wrap(){?>
    
		<div class="subscribe-wrp">
		    <h4 class="widget-title">DOWNLOAD THE MAGAZINE</h4>
			<ul class="subscribe-ul text-center">
				<li><a href="https://itunes.apple.com/us/app/successful-startup-101-magazine/id931273713?ls=1&mt=8" target="_blank"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/download-via-itunes.png" alt=""></a></li>
				<li><a href="https://play.google.com/store/apps/details?id=com.bdhjdigici.gehbdhjdigici" target="_blank"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/google_play.png" alt=""></a></li>
				<li><a href="https://www.amazon.com/gp/product/B00TSI2LH0" target="_blank"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/amazon-icon.png" alt=""></a></li>
				<li><a href="https://wecanmag.com/magazine-plans-free" target="_blank"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/pdfDownload.png" alt=""></a></li>
				
			</ul>
		</div>
<?php }

/*
* Custom post type for Partners
*/
add_action( 'init', 'partner_post_type' );
function partner_post_type() {
	/* Set UI labels for Custom Post Type */
	$labels = array(
		'name'                => _x( 'Partners', 'Post Type General Name', 'successfulstartup' ),
		'singular_name'       => _x( 'Partners', 'Post Type Singular Name', 'successfulstartup' ),
		'menu_name'           => __( 'Partners', 'successfulstartup' ),		
		'all_items'           => __( 'All Partners', 'successfulstartup' ),
		'view_item'           => __( 'View Partners', 'successfulstartup' ),
		'add_new_item'        => __( 'Add New Partners', 'successfulstartup' ),
		'add_new'             => __( 'Add New', 'successfulstartup' ),
		'edit_item'           => __( 'Edit Partners', 'successfulstartup' ),
		'update_item'         => __( 'Update Partners', 'successfulstartup' ),
		'search_items'        => __( 'Search Partners', 'successfulstartup' ),
		'not_found'           => __( 'Not Found', 'successfulstartup' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'successfulstartup' ),
	);
	
	/* Set other options for Custom Post Type */
	
	$args = array(
		'label'               => __( 'Partners', 'successfulstartup' ),
		//'description'         => __( 'Partners', 'successfulstartup' ),
		'labels'              => $labels,
		'taxonomies' => array('category'),
		'supports'            => array( 'title', 'editor', 'thumbnail', 'category'),
		//'taxonomies'          => array( 'homepage' ),		
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',

	);
	
	/* Registering your Custom Post Type */
	register_post_type( 'partners', $args );
}



add_action('init', 'my_custom_pt');
function my_custom_pt() {
	add_post_type_support( 'partners', 'genesis-seo' );
	add_post_type_support( 'partners', 'genesis-layouts' );
	add_post_type_support( 'partners', 'genesis-cpt-archives-settings' );
}

/*********************************************/
add_shortcode( 'partners_posts', 'mypartner_func' );
function mypartner_func(){
$args=array(
'post_type'=> 'partners',
'posts_per_page' => 4,
'post_status' => 'publish', 
 'order' => 'DESC',   
  'orderby' => 'date',  
);
$the_query = new WP_Query( $args );
$section_html='';
$section_html.='<div class="partner-head">';
//$section_html.='<div class="row">';
/*Loop Starts here*/
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();

$content= substr(get_the_content(), 0, 167);
$title= get_the_title();
$postid = get_the_ID();
 
//$thumb= echo get_the_post_thumbnail($postid); 
$feat_image = get_the_post_thumbnail( $postid, 'featured-cat-mobile' );
$section_html.='<div class="row partner-border" style="clear:both;">';

$section_html.='<div class="sp-col-3 partner_thumb">';
$section_html.='<div class="partner_thumb">';
$section_html.='<a href="'.get_permalink($post->ID).'">'.$feat_image.'</a>';
$section_html.='</div>';
$section_html.='</div>';
$section_html.='<div class="sp-col-9">';
$section_html.='<div class="partner-list">';
$section_html.='<p class="post-title"><a href="'.get_permalink($post->ID).'">'.$title.'</a></p>';
//$section_html.='<p class="post-excerpt">'.$content.'</p>';
//$section_html.='<p><a href="'.get_permalink($post->ID).'">Read more</a></p>';
$section_html.='</div>';
$section_html.='</div>';
$section_html.='</div>';

$section_html.='</br>';
endwhile;

endif;
//$section_html.='</div>';
$section_html.='</div>';
wp_reset_postdata();
return $section_html;

}

//* Create portfolio custom post type
add_action( 'init', 'news_post_type' );
function news_post_type() {

	register_post_type( 'ss101news',
		array(
			'labels' => array(
				'name'          => __( 'News', 'minimum' ),
				'singular_name' => __( 'News', 'minimum' ),
			),
			'exclude_from_search' => true,
			'has_archive'         => true,
			'hierarchical'        => true, 'show_ui' => true,
			'menu_icon'           => 'dashicons-admin-page',
			'public'              => true,
			//'rewrite' => false,
			'rewrite'             => array( 'slug' => 'ss101news', 'with_front' => true ),
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' )
		)
	);
	
}

//new function
//value of a customer
add_shortcode( 'lifetimevalue', 'band_listing_display_shortcode' );
function band_listing_display_shortcode( $atts ) {
    ob_start(); 
?>
<table class="lifeval" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td colspan="2" align="center"><h1>Lifetime Value of a Customer</h1></td>
  </tr>
  <tr>
    <td><h3>Amount of Average Sale</h3></td>
    <td class="border">$<input type="number" id="one_one" value="20"></td>
  </tr>
  <tr>
    <td><h3>No. of Sales per year</h3></td>
    <td class="border"><input type="number" id="one_two" value="24"></td>
  </tr>
  <tr>
    <td><h3>No. of Years a Customer</h3></td>
    <td class="border"><input type="number" id="one_three" value="5"></td>
  </tr>
  <tr>
    <td><h3>Additional Customers Referrals/Year</h3></td>
    <td class="border"><input type="number" id="one_four" value="4"></td>
  </tr>
  <tr>
    <td><h3>% of referrals who become customers</h3></td>
    <td class="border"><input type="number" id="one_five" value="50">
      %</td>
  </tr>
  <tr>
    <td><h3>Gross Sales per Year (A x B)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_six" value="480" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3>Gross Sales over lifetime (F x C)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_seven" value="2400" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3>New Customers Annually from Referrals</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="one_eight" value="2.0" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3>Lifetime Sales from Referrals (H x C x G)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_nine" value="24000" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3 style="font-weight:900;">Total Value of a Loyal Customer (I +G)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop; font-weight:900;">$
      <input type="number" id="one_ten" value="26400" readonly style="background:#ccc; cursor:no-drop; font-weight:900;"></td>
  </tr>
</table>
<?php } 
add_shortcode( 'salesbooster', 'salesbooster_shortcode' );
function salesbooster_shortcode( $atts ) {
    ob_start(); 
?>
<table class="saleboostdata" id="saleboost" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td colspan="11" align="center"><h1>Sales Booster</h1></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top" ><h3>Customer<br/>Count</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Dollar$ per<br/>Sale</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Purchases<br/>per month</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Monthly<br/>$ales Total</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Annual<br/>$ales Total</h3></td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Baseline - Monthly</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_one_boost" value="50"></td>
    <td>&nbsp;</td>
    <td class="border">$<input type="number" id="one_two_boost" value="20"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_three_boost" value="0.5"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="one_four_boost" value="500" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="one_five_boost" value="6000" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><h3 id="two_one_boost">6.6</h3></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td align="right" valign="middle" ><h3>How to Get There?</h3></td>
    <td>&nbsp;</td>
    <td align="center" valign="top" ><h3>SMM/Video</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>SEO</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Email Marketing</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" >&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Increase %</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="three_one_boost" value="100">%</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="three_two_boost" value="0">%</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="three_three_boost" value="10">%</td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="three_four_boost" value="120" readonly style="background:#ccc; cursor:no-drop;">%</td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="three_five_boost" value="120" readonly style="background:#ccc; cursor:no-drop;">%</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>&nbsp;</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="four_one_boost" value="100" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="four_two_boost" value="20" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="four_three_boost" value="0.55" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="four_four_boost" value="1100" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="four_five_boost" value="13200" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>

  <tr>
    <td align="right" valign="middle" >&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><h2>Sales Boost</h2></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="six_one_boost" value="600" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="six_two_boost" value="7200" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
 
  <tr>
    <td colspan="11" align="center" valign="middle"><h2>More Customers - More Sales - More Profits</h2></td>
  </tr>
</table>	
<?php } 
add_shortcode( 'trafficmax', 'trafficmax_shortcode' );
function trafficmax_shortcode( $atts ) {
    ob_start(); 
?>
 <table  class="traffic_data" id="traffic_max_data" border="0" align="center" cellpadding="0" cellspacing="5">
        <tr>
            <td colspan="11" align="center">
                <h1>Traffic Maximizer</h1>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td align="center" valign="top">
                <h3>Monthly<br/>Site Traffic</h3>
            </td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">
                <h3>Dollar$ per<br/>Sale</h3>
            </td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">
                <h3>Conversion/<br/> Response %</h3>
            </td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">
                <h3>Monthly<br/>Sales Total</h3>
            </td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">
                <h3>Annual<br/>Sales Total</h3>
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle">
                <h3>Baseline - Monthly</h3>
            </td>
            <td>&nbsp;</td>
            <td class="border"><input type="number" id="one_one_traffic" value="1000"></td>
            <td>&nbsp;</td>
            <td class="border">$<input type="number" id="one_two_traffic" value="20"></td>
            <td>&nbsp;</td>
            <td class="border"><input type="number" id="one_three_traffic" value="9"> %
            </td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="one_four_traffic" value="1800" readonly style="background:#ccc; cursor:no-drop;"></td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="one_five_traffic" value="21600" readonly style="background:#ccc; cursor:no-drop;"></td>
        </tr>
      
        <tr>
            <td align="right" valign="middle">
                <h3>How to Get There?</h3>
            </td>
            <td>&nbsp;</td>
            <td align="center" valign="top">
                <h3>SMM/Video</h3>
            </td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">
                <h3>SEO</h3>
            </td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">
                <h3>Email Marketing</h3>
            </td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">&nbsp;</td>
            <td align="center" valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td align="right" valign="middle">
                <h3>Increase %</h3>
            </td>
            <td>&nbsp;</td>
            <td class="border"><input type="number" id="two_one_traffic" value="100">%</td>
            <td>&nbsp;</td>
            <td class="border"><input type="number" id="two_two_traffic" value="0">%</td>
            <td>&nbsp;</td>
            <td class="border"><input type="number" id="two_three_traffic" value="0">%</td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="two_four_traffic" value="100" readonly style="background:#ccc; cursor:no-drop;">%</td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="two_five_traffic" value="100" readonly style="background:#ccc; cursor:no-drop;">%</td>
        </tr>
        <tr>
            <td align="right" valign="middle">
                <h3>&nbsp;</h3>
            </td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="three_one_traffic" value="2000" readonly style="background:#ccc; cursor:no-drop;"></td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$
                <input type="number" id="three_two_traffic" value="20" readonly style="background:#ccc; cursor:no-drop;"></td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="three_three_traffic" value="9" readonly style="background:#ccc; cursor:no-drop;"> %
            </td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="three_four_traffic" value="3600" readonly style="background:#ccc; cursor:no-drop;"></td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="three_five_traffic" value="43200" readonly style="background:#ccc; cursor:no-drop;"></td>
        </tr>
       
        <tr>
            <td colspan="7" align="right" valign="middle">
                <h3>Revenue Boost</h3>
            </td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="four_one_traffic" value="1800" readonly style="background:#ccc; cursor:no-drop;"></td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="four_two_traffic" value="21600" readonly style="background:#ccc; cursor:no-drop;"></td>
        </tr>
        <tr>
            <td colspan="7" align="right" valign="middle">
                <h3>Additional Product/Service Cost</h3>
            </td>
            <td>&nbsp;</td>
            <td class="border">$
                <input type="number" id="five_one_traffic" value="1000"></td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$
                <input type="number" id="five_two_traffic" value="12000" readonly style="background:#ccc; cursor:no-drop;"></td>
        </tr>
        <tr>
            <td colspan="7" align="right" valign="middle">
                <h3>Net Revenue Increase</h3>
            </td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$
                <input type="number" id="six_one_traffic" value="800" readonly style="background:#ccc; cursor:no-drop;"></td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$
                <input type="number" id="six_two_traffic" value="9600" readonly style="background:#ccc; cursor:no-drop;"></td>
        </tr>
        <tr>
            <td colspan="7" align="right" valign="middle">
                <h2 style="margin:9px 0px; color:#ff0000;">ROI</h2>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="border" style="background:#ff0000; color:#fff; border:1px solid #ff0000; cursor:no-drop;"><input type="number" id="seven_one_traffic" value="80" readonly style="background:#ff0000; color:#fff; cursor:no-drop;"> %
            </td>
        </tr>
      
        <tr>
            <td colspan="11" align="center" valign="middle">
                <h2>More Customers - More Sales - More Profits</h2>
            </td>
        </tr>
    </table>
<?php } 
add_shortcode( 'roi', 'roi_shortcode' );
function roi_shortcode( $atts ) {
    ob_start(); 
?>
<table  class="roidata" id="roi_data_added" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td colspan="13" align="center"><h1>ROI Marketing</h1></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top" ><h3>Subscribers<br>
        (Size of List)</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Promotions<br>
        per month</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Response<br>
        Rate</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Avg Dollars<br>
        per Sale</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Monthly<br>
        Sales Total</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Annual<br>
        Sales Total</h3></td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Baseline</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_one_roi" value="50"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_two_roi" value="4"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_three_roi" value="8">
      %</td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="one_four_roi" value="20"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_five_roi" value="320" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_six_roi" value="3840" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>

  <tr>
    <td align="right" valign="middle" ><h3>Size of List</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_one_roi" value="200"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_two_roi" value="500"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_three_roi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_four_roi" value="2000"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_five_roi" value="5000"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Revenue/Month</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_one_roi" value="1280" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_two_roi" value="3200" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_three_roi" value="6400" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_four_roi" value="12800" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_five_roi" value="3200" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Percent Discount</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_one_roi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_two_roi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_three_roi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_four_roi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_five_roi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Cost of Discount</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_one_roi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_two_roi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_three_roi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_four_roi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_five_roi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Cost of Service</h3></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_one_roi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_two_roi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_three_roi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_four_roi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_five_roi" value="1000"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Net Profit/Month</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_one_roi" value="280" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_two_roi" value="2200" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_three_roi" value="5400" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_four_roi" value="11800" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_five_roi" value="31000" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td colspan="13" align="center" valign="middle"><h2>More Customers - More Sales - More Profits</h2></td>
  </tr>
</table>

<?php } 
add_shortcode( 'advancedroi', 'advancedroi_shortcode' );
function advancedroi_shortcode( $atts ) {
    ob_start(); 
?>
<table  class="roidata" id="roi_data_added" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td colspan="13" align="center"><h1>ROI Marketing</h1></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top" ><h3>Subscribers<br>
        (Size of List)</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Promotions<br>
        per month</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Response<br>
        Rate</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Avg Dollars<br>
        per Sale</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Monthly<br>
        Sales Total</h3></td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top" ><h3>Annual<br>
        Sales Total</h3></td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Baseline</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_one_advancedroi" value="50"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_two_advancedroi" value="4"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="one_three_advancedroi" value="8">
      %</td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="one_four_advancedroi" value="20"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_five_advancedroi" value="320" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_six_advancedroi" value="3840" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>


  <tr>
    <td align="right" valign="middle" ><h3>Variable Increase %</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="new_one_one_advancedroi" value="100">
    %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="new_one_two_advancedroi" value="0">
    %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="new_one_three_advancedroi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="new_one_four_advancedroi" value="0">
    %</td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="new_one_five_advancedroi" value="100" readonly style="background:#ccc; cursor:no-drop;">
    %</td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="new_one_six_advancedroi" value="100" readonly style="background:#ccc; cursor:no-drop;">
      %</td>
  </tr>
  <tr>
    <td align="right" valign="middle"><h3>&nbsp;</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="new_two_one_advancedroi" value="100" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="new_two_two_advancedroi" value="4" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="new_two_three_advancedroi" value="8.0" readonly style="background:#ccc; cursor:no-drop;">
      %</td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="new_two_four_advancedroi" value="20" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="new_two_five_advancedroi" value="640" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="new_two_six_advancedroi" value="7680" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>

  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><h2 style="margin:9px 0px;">Sales Boost</h2></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="new_three_one_advancedroi" value="320" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="new_three_two_advancedroi" value="3840" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>


  <tr>
    <td align="right" valign="middle" ><h3>Size of List</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_one_advancedroi" value="200"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_two_advancedroi" value="500"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_three_advancedroi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_four_advancedroi" value="2000"></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="two_five_advancedroi" value="5000"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Revenue/Month</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_one_advancedroi" value="1280" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_two_advancedroi" value="3200" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_three_advancedroi" value="6400" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_four_advancedroi" value="12800" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="three_five_advancedroi" value="3200" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Percent Discount</h3></td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_one_advancedroi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_two_advancedroi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_three_advancedroi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_four_advancedroi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td class="border"><input type="number" id="four_five_advancedroi" value="0">
      %</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Cost of Discount</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_one_advancedroi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_two_advancedroi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_three_advancedroi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_four_advancedroi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="five_five_advancedroi" value="0" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Cost of Service</h3></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_one_advancedroi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_two_advancedroi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_three_advancedroi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_four_advancedroi" value="1000"></td>
    <td>&nbsp;</td>
    <td class="border">$
      <input type="number" id="six_five_advancedroi" value="1000"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="middle" ><h3>Net Profit/Month</h3></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_one_advancedroi" value="280" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_two_advancedroi" value="2200" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_three_advancedroi" value="5400" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_four_advancedroi" value="11800" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="seven_five_advancedroi" value="31000" readonly style="background:#ccc; cursor:no-drop;"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<tr>
    <td colspan="13" align="center" valign="middle"><h2>More Customers - More Sales - More Profits</h2></td>
  </tr>
</table>
<?php } 
add_shortcode( 'value_customer_twice', 'value_customer_twice_shortcode' );
function value_customer_twice_shortcode( $atts ) {
    ob_start(); 
?>
<table class="roidata" id="val_cust_twice" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td><h1>Lifetime Value of a Customer</h1></td>
	<td></td>
	    <td  align="center"><h1>%Increase</h1></td>
		<td></td>
  </tr>
  <tr>
    <td><h3>Amount of Average Sale</h3></td>
    <td class="border">$<input type="number" id="one_one_twice" value="20"></td>
	<td class="border"><input type="number" id="data_one_twice" value="0">
    %</td>
	<td class="border">$<input type="number" id="data_two_twice" value="20"></td>
  </tr>
  <tr>
    <td><h3>No. of Sales per year</h3></td>
    <td class="border"><input type="number" id="one_two_twice" value="24"></td>
	<td class="border"><input type="number" id="data_three_twice" value="25">
    %</td>
	<td class="border"><input type="number" id="data_four_twice" value="30.0"></td>
  </tr>
  <tr>
    <td><h3>No. of Years a Customer</h3></td>
    <td class="border"><input type="number" id="one_three_twice" value="5"></td>
	<td class="border"><input type="number" id="data_five_twice" value="0">
    %</td>
	<td class="border"><input type="number" id="data_six_twice" value="5"></td>
  </tr>
  <tr>
    <td><h3>Additional Customers Referrals/Year</h3></td>
    <td class="border"><input type="number" id="one_four_twice" value="4"></td>
	<td class="border"><input type="number" id="data_seven_twice" value="0">
    %</td>
	<td class="border"><input type="number" id="data_eight_twice" value="4"></td>
  </tr>
  <tr>
    <td><h3>% of referrals who become customers</h3></td>
    <td class="border"><input type="number" id="one_five_twice" value="50">
      %</td>
	<td class="border"><input type="number" id="data_nine_twice" value="0">
    %</td>
	<td class="border"><input type="number" id="data_ten_twice" value="50">
    %</td>
  </tr>
  <tr>
    <td><h3>Gross Sales per Year (A x B)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_six_twice" value="480" readonly style="background:#ccc; cursor:no-drop;"></td>
	  <td rowspan="4"></td>
	    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="data_eleven_twice" value="600" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3>Gross Sales over lifetime (F x C)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_seven_twice" value="2400" readonly style="background:#ccc; cursor:no-drop;"></td>
	  <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="data_twelve_twice" value="3000" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3>New Customers Annually from Referrals</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="one_eight_twice" value="2.0" readonly style="background:#ccc; cursor:no-drop;"></td>
	<td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="data_thirteen_twice" value="2.0" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3>Lifetime Sales from Referrals (H x C x G)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="one_nine_twice" value="24000" readonly style="background:#ccc; cursor:no-drop;"></td>
	  <td class="border" style="background:#ccc; cursor:no-drop;">$
      <input type="number" id="data_fourteen_twice" value="30000" readonly style="background:#ccc; cursor:no-drop;"></td>
  </tr>
  <tr>
    <td><h3 style="font-weight:900;">Total Value of a Loyal Customer (I +G)</h3></td>
    <td class="border" style="background:#ccc; cursor:no-drop; font-weight:900;">$
      <input type="number" id="one_ten_twice" value="26400" readonly style="background:#ccc; cursor:no-drop; font-weight:900;"></td>
	  <td class="border"><input type="number" id="data_fifteen_twice" value="25">
    %</td>
	  <td class="border" style="background:#ccc; cursor:no-drop; font-weight:900;">$
      <input type="number" id="data_sixteen_twice" value="33000" readonly style="background:#ccc; cursor:no-drop; font-weight:900;"></td>
  </tr>
</table>  
<?php } 
add_shortcode( 'appointmentroi', 'appointmentroi_shortcode' );
function appointmentroi_shortcode( ) {
    ob_start(); 
?>
	<table  class="roidata AppointmentTable" id="appointmentroidata" border="0" align="center" cellpadding="0" cellspacing="5">
        <tr>
            <td colspan="14" align="center">
                <h1>ROI Appointment Confirmations</h1>
            </td>
        </tr>
		<tr>
            <td align="right" valign="middle">
                <h2>Avg Appts/Day</h2>
            </td>
           <td class="border"><input type="number" id="aptroi_one" value="20"></td>
			<td align="right" valign="middle">
                <h2>OpenAppts/Day</h2>
            </td>
          <td class="border"><input type="number" id="aptroi_two" value="20"></td>
        </tr>
		
		
		
		<tr>
			<td>&nbsp;</td>
			<td align="center" valign="top"><h3>Appt Capacity <br>Per Month</h3></td>
			<td align="center" valign="top"><h3>% Open<br>Appts</h3></td>
			<td align="center" valign="top"><h3># Open Appts <br> /Month</h3></td>
			<td align="center" valign="top"><h3>Dollar Value <br> per Appt</h3></td>
			<td align="center" valign="top"><h3>Monthly<br> Lost Revenue</h3></td>
			<td align="center" valign="top"><h3>Annual<br>Lost Revenue</h3></td>
		</tr>
		
		<tr>
			<td></td>
		</tr>
		
		<tr>
		<td align="right" valign="middle"><h3> Lost Revenue</h3></td>
			<td class="border"><input type="number" id="aptroi_three" value="440"></td>
			<td class="border"><input type="number" id="aptroi_four" value="10">%</td>
			<td class="border"><input type="number" id="aptroi_five" value="44"></td>
			<td class="border">$<input type="number" id="aptroi_six" value="100"></td>
			<td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="aptroi_seven" value="4400" readonly="" style="background:#ccc; cursor:no-drop;"></td>
			<td class="border" style="background:#ccc; cursor:no-drop;">$<input type="number" id="aptroi_eight" value="52800" readonly="" style="background:#ccc; cursor:no-drop;"></td>
		</tr>
		
        <tr>
         
            <td valign="top" colspan="6" style="text-align:right;">
                <h3>Recovered Revenue</h3>
            </td>
        </tr>
		
		<tr>
			<td align="right" valign="middle"><h3>% Reduced Open Appts via SMS</h3></td>
			<td class="border"><input type="number" id="aptroi_nine" value="25">%</td>
			<td class="border"><input type="number" id="aptroi_ten" value="11"></td>
			<td class="border">$<input type="number" id="aptroi_eleven" value="100"></td>
			<td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="aptroi_twelve" value="1100" readonly="" style="background:#ccc; cursor:no-drop;">$</td>
			<td class="border" style="background:#ccc; cursor:no-drop;"><input type="number" id="aptroi_thirteen" value="13200" readonly="" style="background:#ccc; cursor:no-drop;">$</td>
		</tr>
		
        <tr>
            <td colspan="4" align="right" valign="middle">
                <h3>Less Cost of Reminder Service </h3>
            </td>		
            <td class="border">$<input type="number" id="aptroi_fourteen" value="400" ></td>            
             <td class="border">$
                <input type="number" id="aptroi_fifteen" value="4800">
			</td>
        </tr>
       
        <tr>
            <td colspan="4" align="right" valign="middle">
                <h3>Net Gain in Revenue</h3>
            </td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$
                <input type="number" id="aptroi_sixteen" value="700" readonly style="background:#ccc; cursor:no-drop;"></td>
            <td class="border" style="background:#ccc; cursor:no-drop;">$
                <input type="number" id="aptroi_seventeen" value="8400" readonly style="background:#ccc; cursor:no-drop;"></td>
        </tr>
		
        <tr>
			<td colspan="3"> ROI = ( Gain form Investment- Cost of Investment )<br> / Cost of Investment</td>
            <td colspan="2" align="right" valign="middle">
                <h2 style="margin:9px 0px; color:#ff0000;">ROI</h2>
            </td>
            <td class="border" style="background:#ff0000; color:#fff; border:1px solid #ff0000; cursor:no-drop;"><input type="number" id="aptroi_eighteen" value="175" readonly style="background:#ff0000; color:#fff; cursor:no-drop;"> %
            </td>
        </tr>
		
        <tr>
            <td colspan="11" align="center" valign="middle">
                <h2>More Clients - More Revenue - More Profits</h2>
				<h2>~Plus Cost Savings of Admin Phone Time~</h2>
            </td>
        </tr>
    </table>
<?php }