<?php get_header(); ?>
	
	
	
	<div class="sp-container content">
	
		<div class="sp-row">
		
			<div id="main" <?php if(get_theme_mod('hawthorn_sidebar_homepage') == true) : ?>class="fullwidth"<?php endif; ?>>
			    <?php if(get_theme_mod('hawthorn_featured_slider')) : ?>
	            <?php get_template_part('inc/featured/featured'); ?>
	            <?php endif; ?>
			
				<div class="sp-row post-layout <?php if(get_theme_mod('hawthorn_home_layout') == 'full_grid' && !is_paged()) : ?>full-grid<?php elseif(get_theme_mod('hawthorn_home_layout') == 'full_grid' && is_paged()) : ?>grid<?php elseif(get_theme_mod('hawthorn_home_layout') == 'grid') : ?>grid<?php endif; ?>">
					<?php $sp_count = 0; ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php if(get_theme_mod('hawthorn_home_layout') == 'grid') : ?>
						
						<?php get_template_part('content', 'grid'); ?>
					
					<?php elseif(get_theme_mod('hawthorn_home_layout') == 'full_grid') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
					
					<?php elseif(get_theme_mod('hawthorn_home_layout') == 'list') : ?>
						
						<?php get_template_part('content', 'list'); ?>
						
					<?php elseif(get_theme_mod('hawthorn_home_layout') == 'full_list') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
					
					<?php elseif(get_theme_mod('hawthorn_home_layout') == 'list_alt') : ?>
						<?php $sp_count++; ?>
						<?php if($sp_count % 2 == 0) : ?>
						<?php get_template_part('content', 'list'); ?>
						<?php else : ?>
						<?php get_template_part('content', 'list-alt'); ?>
						<?php endif; ?>
						
					<?php elseif(get_theme_mod('hawthorn_home_layout') == 'full_list_alt') : ?>
						
						<?php $sp_count++; ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php if($sp_count % 2 == 0) : ?>
							<?php get_template_part('content', 'list'); ?>
							<?php else : ?>
							<?php get_template_part('content', 'list-alt'); ?>
							<?php endif; ?>
						<?php endif; ?>
						
					<?php else : ?>
						
						<?php get_template_part('content'); ?>
						
					<?php endif; ?>	
				
				<?php endwhile; ?>
					
					<?php hawthorn_pagination(); ?>
					
				<?php endif; ?>
				
				</div>
				
			</div>
	
<?php if(get_theme_mod('hawthorn_sidebar_homepage')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>