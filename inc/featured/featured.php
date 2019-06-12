<div id="featured-area">
		
	<div class="sp-container">
	
		<div class="sp-row">
			
			<div class="sideslides">
	
				<div class="bxslider">
			
					<?php
						// Get featured posts
						$featured_cat = get_theme_mod( 'hawthorn_featured_cat' );
						$get_featured_posts = get_theme_mod('hawthorn_featured_id');
						$number = get_theme_mod( 'hawthorn_featured_slider_slides' );
				
						if($get_featured_posts) {
							$featured_posts = explode(',', $get_featured_posts);
							$args = array( 'showposts' => $number, 'post_type' => array('post', 'page'), 'post__in' => $featured_posts, 'orderby' => 'post__in' );
						} else {
							if($featured_cat == 'lifestyle') {
							$args = array( 'category_name' => $featured_cat, 'showposts' => $number );
							} else {
							$args = array( 'cat' => $featured_cat, 'showposts' => $number );
							}
						}
						
						$feat_query = new WP_Query( $args );
						if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post();
					
					?>
						
						<?php
							// Get slider image
							if(get_post_meta( get_the_ID(), 'meta-image', true )) :
							
								$feat_image = get_post_meta( get_the_ID(), 'meta-image', true );
								
							else :
							
								if(has_post_thumbnail()) {
									$get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
									$feat_image = $get_feat_image[0];
								} else {
									$feat_image = get_template_directory_uri() . '/img/slider-default.png';
								}
							
							endif;
							
							// Get title
							if(get_post_meta( get_the_ID(), 'meta-textarea', true )) :
								$feat_title = get_post_meta( get_the_ID(), 'meta-textarea', true );
							else :
								$feat_title = get_the_title();
							endif;
							
							// Get Excerpt
							if(get_post_meta( get_the_ID(), 'meta-textarea-excerpt', true )) :
								$feat_excerpt = get_post_meta( get_the_ID(), 'meta-textarea-excerpt', true );
							else :
								$feat_excerpt = hawthorn_string_limit_words(get_the_excerpt(), 24) . '&hellip;';
							endif;
							
							
						?>
						
						
						<div class="sp-col-12">
							
							<div class="feat-item">
								
								<div class="feat-img" style="background-image:url(<?php echo esc_url($feat_image); ?>);"></div>
								
								<div class="feat-content">
									
									<?php if(!get_theme_mod( 'hawthorn_featured_cat_hide' )) : ?>
									<span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span>
									<?php endif; ?>
									
									<?php if(!get_theme_mod( 'hawthorn_featured_title_hide' )) : ?>
									<h2><a href="<?php echo get_permalink(); ?>"><?php echo esc_html($feat_title); ?></a></h2>
									<?php endif; ?>
									
									<?php //if(!get_theme_mod( 'hawthorn_featured_excerpt_hide' )) : ?>
									<p><?php //echo esc_html($feat_excerpt); ?></p>
									<?php //endif; ?>
									
									<?php //if(!get_theme_mod( 'hawthorn_featured_more_hide' )) : ?>
									<!--<a href="<?php //echo get_permalink(); ?>" class="feat-more"><?php// esc_html_e( 'Read More', 'hawthorn' ); ?></a>-->
									<?php //endif; ?>
									
								</div>

							</div>
							
						</div>
						
					
					<?php endwhile; endif; ?>
				
				</div>
				
			</div>

		</div>
	
	</div>
	
</div>