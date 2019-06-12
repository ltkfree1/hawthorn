<?php /* Template Name: Narrow Full Width Page */ ?>
<?php get_header(); ?>
	
	<div class="sp-container content">
		
		<div class="sp-row">
		
			<div id="main" class="fullwidth narrow post-fullwidth">
					
				<div class="sp-row">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<?php get_template_part('content', 'page'); ?>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
				
			</div>
			
<?php get_footer(); ?>