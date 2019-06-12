<?php /* Template Name: Page w/ Slider */ ?>
<?php get_header(); ?>
	
	<?php if(get_theme_mod('hawthorn_featured_slider')) : ?>
	<?php get_template_part('inc/featured/featured'); ?>
	<?php endif; ?>
	
	<div class="sp-container content">
		
		<div class="sp-row">
		
			<div id="main">
					
				<div class="sp-row">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<?php get_template_part('content', 'page'); ?>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
				
			</div>
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>