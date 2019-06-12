<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<?php if(!get_theme_mod('hawthorn_responsive')) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php endif; ?>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="mobile-top">
		
		<div id="slick-mobile-menu"></div>
		
		<div id="mobile-top-right">
		
			<div id="mobile-top-misc">
				<?php if(!get_theme_mod('hawthorn_header_hide_search')) : ?>
				<div class="mobile-top-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<div class="mobile-show-search">
					<?php get_search_form(); ?>
					<a href="#" class="close-search"><i class="fa fa-close"></i></a>
				</div>
				<?php endif; ?>
				
				<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
				<?php if(!get_theme_mod('hawthorn_woo_cart_icon')) : ?>
					<?php hawthorn_header_cart_fragment(); ?>
				<?php endif; ?>
				<?php endif; ?>
			</div>
		
			<?php if(!get_theme_mod('hawthorn_header_hide_social')) : ?>
			<div id="mobile-top-social">
				<?php if(function_exists('hawthorn_core_get_social_icons')) { hawthorn_core_get_social_icons(); } ?>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
	
	<div id="header-mobile-wrapper">
	
	<header id="header">
	
		<div class="sp-container">
		
			<div class="sp-row">
			
				<div class="sp-col-12">
					
					<?php if(!get_theme_mod('hawthorn_header_hide_social')) : ?>
					<div id="top-social">
						<?php if(function_exists('hawthorn_core_get_social_icons')) { hawthorn_core_get_social_icons(); } ?>
					</div>
					<?php endif; ?>
					
					<div id="logo">
						<?php if(!get_theme_mod('hawthorn_logo')) : ?>
									
							<?php if(is_front_page()) : ?>
								<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
							<?php else : ?>
								<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
							<?php endif; ?>
							
						<?php else : ?>
							
							<?php if(is_front_page()) : ?>
								<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('hawthorn_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
							<?php else : ?>
								<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('hawthorn_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
							<?php endif; ?>
							
						<?php endif; ?>
					</div>
					
					<div id="top-misc">
					
						<?php if(!get_theme_mod('hawthorn_header_hide_search')) : ?>
						<div class="desk-top-search">
							<a href="#"><i class="fa fa-search"></i></a>
						</div>
						<div class="desk-show-search">
							<?php get_search_form(); ?>
							<a href="#" class="close-search"><i class="fa fa-close"></i></a>
						</div>
						<?php endif; ?>
						
						<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
						<?php if(!get_theme_mod('hawthorn_woo_cart_icon')) : ?>
							<?php hawthorn_header_cart_fragment(); ?>
						<?php endif; ?>
						<?php endif; ?>

					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</header>
	</div>
	
	<nav id="navigation">
	
		<div class="sp-container">
		
			<div class="sp-row">
			
				<div class="sp-col-12">
				
					<div id="nav-wrapper">
						
						<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</nav>