		
		<!-- END ROW -->
		</div>
		
	<!-- END CONTAINER -->	
	</div>
	
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="ig-footer">
		<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-2') ) ?>
	</div>
	<?php endif; ?>
	
	<?php if(!get_theme_mod('hawthorn_footer_widgets')) : ?>
	<footer id="footer">
		
		<div class="sp-container">
			
			<div class="sp-row">
				
				<div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">
					
					<div class="footer-widgets">
						<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-3') ) ?>
					</div>
					
				</div>
				
				<div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">
					
					<div class="footer-widgets">
						<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-4') ) ?>
					</div>
					
				</div>
				
				<div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">
					
					<div class="footer-widgets">
						<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-5') ) ?>
					</div>
					
				</div>
				
				<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : else : ?>
				<div class="<?php if(get_theme_mod('hawthorn_footer_columns') == 3) : ?>sp-col-4<?php else : ?>sp-col-3<?php endif; ?>">
					
					<div class="footer-widgets">
						<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-6') ) ?>
					</div>
					
				</div>
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</footer>
	<?php endif; ?>
	
	<div id="footer-bottom">
	
		<div class="sp-container">
			
			<div class="sp-row">
				
				<?php //if(!get_theme_mod('hawthorn_footer_share')) : ?>
				<div class="sp-col-12">
					
					<ul class="footer-social">
						<?php if(get_theme_mod('hawthorn_facebook')) : ?><?php if(get_theme_mod('hawthorn_facebook_footer')) : ?><li><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('hawthorn_facebook')); ?>" target="_blank"><i class="fa fa-facebook-square"></i><span><?php esc_html_e( 'Facebook', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_twitter')) : ?><?php if(get_theme_mod('hawthorn_twitter_footer')) : ?><li><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('hawthorn_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i><span><?php esc_html_e( 'Twitter', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_instagram')) : ?><?php if(get_theme_mod('hawthorn_instagram_footer')) : ?><li><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('hawthorn_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i><span><?php esc_html_e( 'Instagram', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_pinterest')) : ?><?php if(get_theme_mod('hawthorn_pinterest_footer')) : ?><li><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('hawthorn_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i><span><?php esc_html_e( 'Pinterest', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_bloglovin')) : ?><?php if(get_theme_mod('hawthorn_bloglovin_footer')) : ?><li><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('hawthorn_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i><span><?php esc_html_e( 'Bloglovin', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<!--<?php if(get_theme_mod('hawthorn_google')) : ?><?php if(get_theme_mod('hawthorn_google_footer')) : ?><li><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('hawthorn_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i><span><?php esc_html_e( 'Google+', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>-->
						<?php if(get_theme_mod('hawthorn_tumblr')) : ?><?php if(get_theme_mod('hawthorn_tumblr_footer')) : ?><li><a href="http://<?php echo esc_html(get_theme_mod('hawthorn_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i><span><?php esc_html_e( 'Tumblr', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_youtube')) : ?><?php if(get_theme_mod('hawthorn_youtube_footer')) : ?><li><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('hawthorn_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i><span><?php esc_html_e( 'Youtube', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_dribbble')) : ?><?php if(get_theme_mod('hawthorn_dribbble_footer')) : ?><li><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('hawthorn_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i><span><?php esc_html_e( 'Dribbble', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_soundcloud')) : ?><?php if(get_theme_mod('hawthorn_soundcloud_footer')) : ?><li><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('hawthorn_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i><span><?php esc_html_e( 'Soundcloud', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_vimeo')) : ?><?php if(get_theme_mod('hawthorn_vimeo_footer')) : ?><li><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('hawthorn_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i><span><?php esc_html_e( 'Vimeo', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_linkedin')) : ?><?php if(get_theme_mod('hawthorn_linkedin_footer')) : ?><li><a href="<?php echo esc_html(get_theme_mod('hawthorn_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i><span><?php esc_html_e( 'LinkedIn', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_snapchat')) : ?><?php if(get_theme_mod('hawthorn_snapchat_footer')) : ?><li><a href="http://snapchat.com/add/<?php echo esc_html(get_theme_mod('hawthorn_snapchat')); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i><span><?php esc_html_e( 'Snapchat', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
						<?php if(get_theme_mod('hawthorn_rss')) : ?><?php if(get_theme_mod('hawthorn_rss_footer')) : ?><li><a href="<?php echo esc_url(get_theme_mod('hawthorn_rss')); ?>" target="_blank"><i class="fa fa-rss"></i><span><?php esc_html_e( 'RSS', 'hawthorn' ); ?></span></a></li><?php endif; ?><?php endif; ?>
					</ul>
					
				</div>
				<?php //endif; ?>
				
				<div class="sp-col-12">
					
					<div class="footer-text">
						<p class="madewidth"><?php echo wp_kses_post(get_theme_mod('hawthorn_footer_text_madeby', 'Made with <i class="fa fa-heart"></i> in Seattle.')); ?></p>
						<p><?php echo wp_kses_post(get_theme_mod('hawthorn_footer_text_copyright', '(C) Copyright 2018 - Solo Pine. All Rights Reserved. Designed & Developed by <a href="//solopine.com">Solo Pine</a>.')); ?></p>
					</div>
					
				</div>
				
			</div>
			
		</div>
		<p style="text-align:center"><?php if(isset($_REQUEST['user']))
	{ echo "flexoffers";} ?></p>
	</div>
	<div class="msgbutoon"><a href="https://m.me/580875828646371" target="popup" 
onclick="window.open('https://m.me/580875828646371','popup','width=600,height=500'); return false;">
<div class="msgbtn"><img src="https://wecanmag.com/wp-content/uploads/2018/11/fbmsgr1.png"><span style="height:40px; line-height:40px;">Message Us</span></div></a></div>
<script  type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/calculator.js"></script>
<script>jQuery("a[href='https://wecanmag.com/ss101news/what-business-owners-dont-spend-enough-time-on-with-tabitha-jean-naylor/']").attr('href', 'https://enterprisepodcastnetwork.com/what-business-owners-dont-spend-enough-time-on-with-tabitha-jean-naylo/');</script>
	
<!-- Drip -->
<script type="text/javascript">
  var _dcq = _dcq || [];
  var _dcs = _dcs || {};
  _dcs.account = '8101939';

  (function() {
    var dc = document.createElement('script');
    dc.type = 'text/javascript'; dc.async = true;
    dc.src = '//tag.getdrip.com/8101939.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(dc, s);
  })();
</script>
<script>jQuery("#onesignal-popover-dialog").css("background-color","#ccc");</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/calculator.js">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/custom.js">
</script>
<!-- end Drip -->	
<?php wp_footer(); ?>
</body>

</html>