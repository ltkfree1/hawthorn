<?php get_header(); ?>
	
	<div class="archive-box">
		<div class="sp-container">
			<div class="sp-row">
				<div class="sp-col-12">
					<span><?php esc_html_e( 'Browsing Tag', 'hawthorn' ); ?></span>
					<h1><?php printf( esc_html__( '%s', 'hawthorn' ), single_tag_title( '', false ) ); ?></h1>
					<?php if(tag_description()) : ?>
						<?php echo tag_description(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="sp-container content">
	
		<div class="sp-row">
		
			<div id="main" <?php if(get_theme_mod('hawthorn_sidebar_archive') == true) : ?>class="fullwidth"<?php endif; ?>>
			
				<div class="sp-row post-layout <?php if(get_theme_mod('hawthorn_archive_layout') == 'full_grid' && !is_paged()) : ?>full-grid<?php elseif(get_theme_mod('hawthorn_archive_layout') == 'full_grid' && is_paged()) : ?>grid<?php elseif(get_theme_mod('hawthorn_archive_layout') == 'grid') : ?>grid<?php endif; ?>">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php if(get_theme_mod('hawthorn_archive_layout') == 'grid') : ?>
						
						<?php get_template_part('content', 'grid'); ?>
					
					<?php elseif(get_theme_mod('hawthorn_archive_layout') == 'full_grid') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
					
					<?php elseif(get_theme_mod('hawthorn_archive_layout') == 'list') : ?>
					
						<?php get_template_part('content', 'list'); ?>
						
					<?php elseif(get_theme_mod('hawthorn_archive_layout') == 'full_list') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
					
					<?php else : ?>
						
						<?php get_template_part('content'); ?>
						
					<?php endif; ?>	
				
				<?php endwhile; ?>
					
					<?php hawthorn_pagination(); ?>
				
				<?php endif; ?>
				
				</div>
				
			</div>
	
<?php if(get_theme_mod('hawthorn_sidebar_archive')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>