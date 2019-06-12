		
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
				
				<?php if(!get_theme_mod('hawthorn_footer_share')) : ?>
				<div class="sp-col-12">
					
					<ul class="footer-social">
						<?php if(function_exists('hawthorn_core_get_social_icons_footer')) { hawthorn_core_get_social_icons_footer(); } ?>
					</ul>
					
				</div>
				<?php endif; ?>
				
				<div class="sp-col-12">
					
					<div class="footer-text">
						<p class="madewidth"><?php echo wp_kses_post(get_theme_mod('hawthorn_footer_text_madeby', 'Made with <i class="fa fa-heart"></i> in Seattle.')); ?></p>
						<p><?php echo wp_kses_post(get_theme_mod('hawthorn_footer_text_copyright', '(C) Copyright 2019 - Solo Pine. All Rights Reserved. Designed & Developed by <a href="//solopine.com">Solo Pine</a>.')); ?></p>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<?php wp_footer(); ?>
	
</body>

</html>