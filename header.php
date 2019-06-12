<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="fo-verify" content="c2e931f1-c8f8-4fdf-ae3d-84c1bfe5ece9">
	<?php if(!get_theme_mod('hawthorn_responsive')) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php endif; ?>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-27578009-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-27578009-2');
	</script>
	<link rel="manifest" href="https://wecanmag.com/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
 <script type="text/javascript" async='async' >
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
  appId: "f6e1341d-b089-45f5-99d0-21d536b232a0",
    safari_web_id: 'web.onesignal.auto.66c89079-ab76-4c24-84be-2fca07f56f6c',
     autoRegister: false, /* Set to true to automatically prompt visitors */
      

      persistNotification :{enable:false},
     
      httpPermissionRequest: {
        enable: false,
        useCustomModal:true,
        modalTitle:'Modal Title'
      },

         promptOptions: {
        /* These prompt options values configure both the HTTP prompt and the HTTP popup. */
        /* actionMessage limited to 90 characters */
        actionMessage: "We'd like to send you notifications to help you build your business..",
        
        /* cancelButtonText limited to 15 characters */
        cancelButtonText: "No Thanks",
        /* acceptButtonText limited to 15 characters */
        acceptButtonText: "OK, Awesome",
exampleNotificationMessageDesktop:"Top SEO Tips That Enterprise Marketers Must Focus On In 2017 ",
showCredit: false

    },
      
      welcomeNotification :{enable:true, title:'You.  Are.  Awesome!',message:'Thanks for subscribing! Get pumped up, since uber-awesome business strategies are coming your way soon!'},
      notifyButton: {
          enable: true, /* Set to false to hide */


       showCredit: false


      },
      
      setSubscription :{enable:true}

   
    
    }]);
    
  

OneSignal.push(function() {
OneSignal.showHttpPrompt();

 
 
});

  </script>

	<?php wp_head(); ?>
	<style>

		@media screen and (min-width : 1025px) {
.grid-items .item {width: 100% !important;}
.grid-items .item .layer-media {width: 50%;    float: left;}
.grid-items .item .layer-content {width: 46% !important; position: absolute;right: 0;}
.grid-items .item .layer-content .element.element_1.excerpt { font-size: 14px !important;}
.grid-items .item .layer-media img { max-height: 170px !important;  object-fit: cover;}
.post-related .item-related img { max-height: 120px; height: 120px;  object-fit: cover;width: 100%;}
}
	</style>
	<?php if( is_home() || is_front_page() ) : ?>	
	<style>div#main .sp-row.post-layout.full-grid .sp-col-12:first-child {
    display: none !important;}</style>
<?php endif;?>
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
				<?php hawthorn_get_social_icons(); ?>
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
						<?php hawthorn_get_social_icons(); ?>
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
	
		<div class="spp-container">
		
			<div class="sp-roww">
			
				<div class="sp-col-12">
				
					<div id="nav-wrapper">
						
						<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</nav>