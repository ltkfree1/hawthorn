<div class="sp-col-12">
<article id="post-<?php the_ID(); ?>" class="list-item post">
	
	<div class="post-img">
		<?php if(has_post_thumbnail()) : ?>
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('hawthorn-misc-thumb'); ?></a>
		<?php else : ?>
		<a href="<?php echo get_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default-misc.png" alt="<?php esc_attr_e('Default', 'hawthorn'); ?>" /></a>
		<?php endif; ?>
	</div>
	
	<div class="list-content">
		<div class="post-header">
			
			<?php if(!get_theme_mod('hawthorn_post_cat')) : ?>
			<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
			<?php endif; ?>
			
			<h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<?php if(!get_theme_mod('hawthorn_post_date')) : ?>
			<span class="sp-date"><a href="<?php echo get_permalink(); ?>"><span class="updated published"><?php the_time( get_option('date_format') ); ?></span></a></span>
			<?php endif; ?>
			
		</div>
		
		<div class="post-entry">
					
			<p><?php echo hawthorn_string_limit_words(get_the_excerpt(), 18); ?>&hellip;</p>
			
		</div>
	</div>
	
</article>
</div>
