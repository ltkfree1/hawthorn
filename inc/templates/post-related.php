<?php 

$orig_post = $post;
global $post;

$categories = get_the_category($post->ID);

if ($categories) {

	$category_ids = array();

	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args = array(
		'category__in'     => $category_ids,
		'post__not_in'     => array($post->ID),
		'posts_per_page'   => 3,
		'ignore_sticky_posts' => 1,
		'orderby' => 'rand'
	);

	$my_query = new wp_query( $args );
	if( $my_query->have_posts() ) { ?>
		<div class="sp-col-12"><div class="post-related"><div class="sp-row">
		
			<div class="sp-col-12">
				<h4 class="block-heading"><?php esc_html_e( 'You Might Also Like...', 'hawthorn' ); ?></h4>
			</div>
		
		<?php while( $my_query->have_posts() ) {
			$my_query->the_post();?>
			
			<div class="sp-col-4">
				<div class="item-related">
					
					<?php if(has_post_thumbnail()) : ?>
					<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('hawthorn-misc-thumb'); ?></a>
					<?php else : ?>
					<a href="<?php echo get_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default-misc.png" alt="<?php esc_attr_e('Default', 'hawthorn'); ?>" /></a>
					<?php endif; ?>
					
					<h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php if(!get_theme_mod('hawthorn_post_related_date')) : ?>	<span class="sp-date"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?>
					
				</div>
			</div>
			
		<?php
		}
		echo '</div></div></div>';
	}
}
$post = $orig_post;
wp_reset_postdata();

?>