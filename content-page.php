<div class="sp-col-12">
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(''); ?></a>
	</div>
	<?php endif; ?>
	
	<?php if(!get_theme_mod('hawthorn_page_title')) : ?>
	<div class="post-header <?php if(!has_post_thumbnail()) : ?>no-featured-image<?php endif; ?>">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
	</div>
	<?php endif; ?>
	
	<div class="post-entry <?php if(get_theme_mod('hawthorn_page_title')) : ?>no-header<?php endif; ?>">
		
		<?php the_content('', false); ?>
		<?php wp_link_pages(); ?>
		
	</div>
	
	<?php if(!get_theme_mod('hawthorn_page_share') || !get_theme_mod('hawthorn_page_author') || comments_open()) : ?>
	<div class="post-meta">
	
		<div class="sp-row">
			
			<?php if(!get_theme_mod('hawthorn_page_author')) : ?>
			<div class="<?php if(get_theme_mod('hawthorn_page_share') && comments_open() || !get_theme_mod('hawthorn_page_share') && !comments_open()) : ?>sp-col-6<?php elseif(get_theme_mod('hawthorn_page_share') && !comments_open()) : ?>sp-col-12<?php else : ?>sp-col-4<?php endif; ?>">
				<div class="meta-author">
					<span class="by"><?php esc_html_e( 'By', 'hawthorn' ); ?></span> <span class="vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if(!get_theme_mod('hawthorn_page_share')) : ?>
			<div class="<?php if(get_theme_mod('hawthorn_page_author') && comments_open()) : ?>sp-col-6 left<?php elseif(!get_theme_mod('hawthorn_page_author') && !comments_open()) : ?>sp-col-6 right<?php elseif(get_theme_mod('hawthorn_page_author') && !comments_open()) : ?>sp-col-12<?php else : ?>sp-col-4<?php endif; ?>">
				<div class="meta-share">
					<?php if(!get_theme_mod('hawthorn_post_share_facebook')) : ?><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a><?php endif; ?>
					<?php if(!get_theme_mod('hawthorn_post_share_twitter')) : ?><a target="_blank" href="https://twitter.com/intent/tweet?text=Check%20out%20this%20article:%20<?php print hawthorn_social_title( get_the_title() ); ?>&url=<?php echo urlencode(the_permalink()); ?><?php if(get_theme_mod('hawthorn_twitter')) : ?>&via=<?php echo esc_html(get_theme_mod('hawthorn_twitter')); ?><?php endif; ?>"><i class="fa fa-twitter"></i></a><?php endif; ?>
					<?php //$pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
					<?php /* if(!get_theme_mod('hawthorn_post_share_pinterest')) : ?><a data-pin-do="none" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(the_permalink()); ?>&media=<?php echo esc_url($pin_image); ?>&description=<?php print hawthorn_social_title( get_the_title() ); ?>"><i class="fa fa-pinterest"></i></a><?php endif; */?>
				    <?php if(!get_theme_mod('hawthorn_post_share_instagram')) : ?><a target="_blank" href="https://www.instagram.com/wecanmag/"><i class="fa fa-instagram"></i></a><?php endif; ?>
					<?php if(!get_theme_mod('hawthorn_post_share_linkedin')) : ?><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&&title=<?php the_title();?>"><i class="fa fa-linkedin"></i></a><?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if(comments_open()) : ?>
			<div class="<?php if(get_theme_mod('hawthorn_page_author') && !get_theme_mod('hawthorn_page_share') || !get_theme_mod('hawthorn_page_author') && get_theme_mod('hawthorn_page_share')) : ?>sp-col-6<?php elseif(get_theme_mod('hawthorn_page_author') && get_theme_mod('hawthorn_page_share')) : ?>sp-col-12<?php else : ?>sp-col-4<?php endif; ?>">
				<div class="meta-comments">
					<a href="<?php comments_link(); ?>"><span class="by"><?php comments_number( '0', '1', '%' ); ?></span> <?php esc_html_e( 'Comments', 'hawthorn' ); ?></a>
				</div>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>
	<?php endif; ?>

</article>
</div>

<?php if(comments_open()) : ?>
<?php comments_template( '', true );  ?>
<?php endif; ?>