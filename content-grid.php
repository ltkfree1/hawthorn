<div class="<?php if (!isset($check_fullwidth)) {$check_fullwidth='';} if(is_home() && get_theme_mod('hawthorn_sidebar_homepage') == true || is_archive() && get_theme_mod('hawthorn_sidebar_archive') == true || is_search() && get_theme_mod('hawthorn_sidebar_archive') == true || $check_fullwidth == 'yes') : ?>sp-col-4<?php else : ?>sp-col-6<?php endif; ?>">
<article id="post-<?php the_ID(); ?>" class="grid-item post grid-itemm-post-img">

	<div class="post-img">
		<?php if(has_post_thumbnail()) : ?>
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('hawthorn-grid-thumb'); ?></a>
		<?php else : ?>
		<a href="<?php echo get_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default-grid.png" alt="<?php esc_attr_e('Default', 'hawthorn'); ?>" /></a>
		<?php endif; ?>
	</div>
	
	
	<div class="post-header">
		<?php if(!get_theme_mod('hawthorn_post_cat')) : ?>
		<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
		<?php endif; ?>
		
		<h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php echo wp_trim_words( get_the_content(), 15 );?></p>
		<?php if(!get_theme_mod('hawthorn_post_date')) : ?>
		<span class="sp-date"><span class="updated published"><?php the_time( get_option('date_format') ); ?></span></span>
		<?php endif; ?>
	</div>
	
</article>
</div>