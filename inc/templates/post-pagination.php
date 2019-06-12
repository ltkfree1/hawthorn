<?php
	$prev_post = get_previous_post();
	$next_post = get_next_post();
?>
<?php if (!empty( $prev_post ) || !empty( $next_post )) : ?>
<div class="sp-col-12">
<div class="post-pagination <?php if (!empty( $prev_post ) && !empty( $next_post )) : ?>pagi-border<?php endif; ?>">	
<div class="sp-row">
	
	<div class="sp-col-6 prev">
		<?php if (!empty( $prev_post )) : ?>
		<div class="pagination-item prev">
			<div class="pagination-img">	
				
				<?php if(has_post_thumbnail($prev_post->ID)) : ?>
				<a href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><?php echo get_the_post_thumbnail($prev_post->ID, 'hawthorn-misc-thumb'); ?></a>
				<?php else : ?>
				<a href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default-misc.png" alt="<?php esc_attr_e('Default', 'hawthorn'); ?>" /></a>
				<?php endif; ?>
				
			</div>
			<div class="pagination-content">
				<span class="pagination-text"><?php esc_html_e( 'Previous Post', 'hawthorn' ); ?></span>
				<h3><a href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><?php echo esc_html($prev_post->post_title); ?></a></h3>
			</div>
		</div>
		<?php endif; ?>
	</div>

	
	<div class="sp-col-6">
		<?php if (!empty( $next_post )) : ?>
		<div class="pagination-item next">
			<div class="pagination-img">
				<?php if(has_post_thumbnail($next_post->ID)) : ?>
				<a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><?php echo get_the_post_thumbnail($next_post->ID, 'hawthorn-misc-thumb'); ?></a>
				<?php else : ?>
				<a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default-misc.png" alt="<?php esc_attr_e('Default', 'hawthorn'); ?>" /></a>
				<?php endif; ?>
			</div>
			<div class="pagination-content">
				<span class="pagination-text"><?php esc_html_e( 'Next Post', 'hawthorn' ); ?></span>
				<h3><a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><?php echo esc_html($next_post->post_title); ?></a></h3>
			</div>
		</div>
		<?php endif; ?>
	</div>
			
</div>
</div>
</div>
<?php endif; ?>