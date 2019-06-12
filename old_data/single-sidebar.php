<?php
/*
Template Name: Post w/ Sidebar
Template Post Type: post
*/
?>
<?php get_header(); ?>
	
	<div class="sp-container content">
		
		<div class="sp-row">
		
			<div id="main">
					
				<div class="sp-row">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<?php get_template_part('content'); ?>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
				
			</div>
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>