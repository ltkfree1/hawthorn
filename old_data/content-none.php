<div class="sp-col-12">
<article class="post none-content">
					
	<div class="post-header no-featured-image">
	
			<h1><?php esc_html_e( 'Nothing Found', 'hawthorn' ); ?></h1>
		
	</div>
	
	<div class="post-entry nothing">
	
		<?php if ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hawthorn' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'hawthorn' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
		
	</div>
	
</article>
</div>