<div class="sp-col-12">
<article id="post-<?php the_ID(); ?>" <?php post_class('normal post'); ?>>
	
	<?php if(has_post_format('gallery')) : ?>
	
		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>
		
		<?php if($images) : ?>
		
			<div class="post-img sp-gallery">
			<div class="sideslides">
			<ul class="bxslider">
			<?php foreach($images as $image) : ?>
				
				<?php $the_image = wp_get_attachment_image_src( $image, '' ); ?> 
				<?php $the_caption = get_post_field('post_excerpt', $image); ?>
				<li><img src="<?php echo esc_url($the_image[0]); ?>" <?php if($the_caption) : ?>title="<?php echo esc_html($the_caption); ?>"<?php endif; ?> /></li>
				
			<?php endforeach; ?>
			</ul>
			</div>
			</div>
		
		<?php else : ?>
		
			<div class="post-img sp-gallery">
			<div class="sideslides">
			<ul class="bxslider">
				<li><img class="sp-empty-gallery" src="<?php echo get_template_directory_uri(); ?>/img/default-grid.png" alt="<?php esc_attr_e('Default', 'hawthorn'); ?>" /></li>
			</ul>
			</div>
			</div>
		
		<?php endif; ?>
	
	<?php elseif(has_post_format('video')) : ?>
	
		<div class="post-img">
			<?php $sp_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
			<?php if(wp_oembed_get( $sp_video )) : ?>
				<?php echo wp_oembed_get($sp_video); ?>
			<?php else : ?>
				<?php echo wp_kses_post($sp_video); ?>
			<?php endif; ?>
		</div>
	
	<?php elseif(has_post_format('audio')) : ?>
	
		<div class="post-img audio">
			<?php $sp_audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
			<?php if(wp_oembed_get( $sp_audio )) : ?>
				<?php echo wp_oembed_get($sp_audio); ?>
			<?php else : ?>
				<?php echo wp_kses_post($sp_audio); ?>
			<?php endif; ?>
		</div>
	
	<?php else : ?>
	
		<?php if(has_post_thumbnail()) : ?>
		<?php if(get_theme_mod('hawthorn_post_thumb') == 'no_display') : elseif(get_theme_mod('hawthorn_post_thumb') == 'ho_display') : ?>
			
			<?php if(is_single()) : else : ?>
				<div class="post-img">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(''); ?></a>
				</div>
			<?php endif; ?>
				
		<?php else : ?>
			<div class="post-img">
				<?php if(is_single()) : ?>
					<?php the_post_thumbnail(''); ?>
				<?php else : ?>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(''); ?></a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?>
	
	<div class="post-header <?php if(!has_post_thumbnail() && !has_post_format('gallery') || has_post_format('video') || has_post_format('audio') || get_theme_mod('hawthorn_post_thumb') == 'no_display' || is_single() && get_theme_mod('hawthorn_post_thumb') == 'ho_display') : ?>no-featured-image<?php endif; ?>">
		
		<?php if(!get_theme_mod('hawthorn_post_cat')) : ?>
		<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
		<?php endif; ?>
		
		<?php if(is_single()) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
		
		<?php if(!get_theme_mod('hawthorn_post_date')) : ?>
		<span class="sp-date"><a href="<?php the_permalink(); ?>"><span class="updated published"><?php the_time( get_option('date_format') ); ?></span></a></span>
		<?php endif; ?>
		
	</div>
	
	<div class="post-entry <?php if(get_theme_mod('hawthorn_post_summary') == 'full' || is_single()) : else : ?>is-excerpt<?php endif; ?>">
		
		<?php if(is_single()) : ?>
		
			<?php the_content('', false); ?>
			
		<?php else : ?>
		
			<?php if(get_theme_mod('hawthorn_post_summary') == 'full') : ?>
				
				<?php the_content('', false); ?>
				
			<?php else : ?>
				
				<?php if(get_theme_mod('hawthorn_sidebar_homepage') == true) : ?>
				<p><?php echo hawthorn_string_limit_words(get_the_excerpt(), 42); ?>&hellip;</p>
				<?php else : ?>
				<p><?php echo hawthorn_string_limit_words(get_the_excerpt(), 26); ?>&hellip;</p>
				<?php endif; ?>
				
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php wp_link_pages(); ?>
		
		<?php if(!get_theme_mod('hawthorn_post_tags')) : if(is_single()) : if(has_tag()) : ?>
			<div class="post-tags">
				<?php the_tags("",""); ?>
			</div>
		<?php endif; endif; endif;?>
		
	</div>
	
	<?php if(get_theme_mod('hawthorn_post_share_author') && get_theme_mod('hawthorn_post_share') && get_theme_mod('hawthorn_post_comment_link')) : else : ?>
	<div class="post-meta">
	
		<div class="sp-row">
			
			<?php if(!get_theme_mod('hawthorn_post_share_author')) : ?>
			<div class="<?php if(get_theme_mod('hawthorn_post_share') && !get_theme_mod('hawthorn_post_comment_link') || !get_theme_mod('hawthorn_post_share') && get_theme_mod('hawthorn_post_comment_link')) : ?>sp-col-6<?php elseif(get_theme_mod('hawthorn_post_share') && get_theme_mod('hawthorn_post_comment_link')) : ?>sp-col-12<?php else : ?>sp-col-4<?php endif; ?> col-meta-author">
				<div class="meta-author">
					<span class="by author"><?php esc_html_e( 'by', 'hawthorn' ); ?></span> <span class="vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span>
				</div>
			</div>
			<?php endif; ?>
				
			<?php if(!get_theme_mod('hawthorn_post_share')) : ?>
			<div class="<?php if(get_theme_mod('hawthorn_post_share_author') && !get_theme_mod('hawthorn_post_comment_link')) : ?>sp-col-6 left<?php elseif(!get_theme_mod('hawthorn_post_share_author') && get_theme_mod('hawthorn_post_comment_link')) : ?>sp-col-6 right<?php elseif(get_theme_mod('hawthorn_post_share_author') && get_theme_mod('hawthorn_post_comment_link')) : ?>sp-col-12<?php else : ?>sp-col-4<?php endif; ?> col-meta-share">
				<div class="meta-share">
					<?php if(function_exists('hawthorn_core_get_social_share')) { hawthorn_core_get_social_share(); } ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if(!get_theme_mod('hawthorn_post_comment_link')) : ?>
			<div class="<?php if(get_theme_mod('hawthorn_post_share_author') && !get_theme_mod('hawthorn_post_share') || !get_theme_mod('hawthorn_post_share_author') && get_theme_mod('hawthorn_post_share')) : ?>sp-col-6<?php elseif(get_theme_mod('hawthorn_post_share_author') && get_theme_mod('hawthorn_post_share')) : ?>sp-col-12<?php else : ?>sp-col-4<?php endif; ?> col-meta-comments">
				<div class="meta-comments">
					<a href="<?php comments_link(); ?>"><span class="by comment-counter"><?php comments_number( '0', '1', '%' ); ?></span> <span class="comments-text"><?php esc_html_e( 'Comments', 'hawthorn' ); ?></span></a>
				</div>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
	<?php endif; ?>

</article>
</div>

<!-- Display Related Posts -->
<?php if(!get_theme_mod('hawthorn_post_related')) : ?>	
<?php if(is_single()) : ?>
<?php get_template_part('inc/templates/post-related'); ?>
<?php endif; ?>
<?php endif; ?>

<?php if(is_single()) : ?>
<?php if ( comments_open() ) : ?>
<?php comments_template( '', true );  ?>
<?php endif; ?>
<?php endif; ?>

<?php if(!get_theme_mod('hawthorn_post_pagination_hide')) : ?>	
<!-- Display Post Pagination -->
<?php if(is_single()) : ?>
<?php get_template_part('inc/templates/post-pagination'); ?>
<?php endif; ?>
<?php endif; ?>