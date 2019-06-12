<?php get_header(); ?>
	
	<div class="sp-container content">
		
		<div class="sp-row">
		
			<div id="main">
					
				<div class="sp-row">
				
					<article class="post none-content">
							
						<div class="post-header no-featured-image e404">
						
							<h1><?php esc_html_e( '404', 'hawthorn' ); ?></h1>
							
						</div>
						
						<div class="post-entry nothing">

							<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'hawthorn' ); ?></p>
							<?php get_search_form(); ?>
							
						</div>
						
					</article>
					
				</div>
				
			</div>
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>