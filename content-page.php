<div class="sp-col-12">
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<?php the_post_thumbnail(''); ?>
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
					<?php if(function_exists('hawthorn_core_get_social_share')) { hawthorn_core_get_social_share(); } ?>
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