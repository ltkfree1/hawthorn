<?php
 
    /* Template Name: Blog Template */
 
?>
<?php get_header(); ?>
   
    <?php
        $check_fullwidth = get_post_meta( get_the_ID(), 'meta-checkbox-fullwidth', true );
        $check_page_content = get_post_meta( get_the_ID(), 'meta-checkbox-page-content', true );
        $check_blog_heading = get_post_meta( get_the_ID(), 'meta-text-blog-heading', true );
        $check_blog_layout = get_post_meta( get_the_ID(), 'meta-select-blog-layout', true );
        $check_number_posts = get_post_meta( get_the_ID(), 'meta-number-posts', true );
        $check_category = get_post_meta( get_the_ID(), 'meta-blog-category', true );
        $check_featured_slider = get_post_meta( get_the_ID(), 'meta-checkbox-blog-slider', true );
    ?>
   
    <?php if($check_featured_slider) : ?>
    <?php get_template_part('inc/featured/featured'); ?>
    <?php endif; ?>
   
    <div class="sp-container content">
       
        <div class="sp-row">
       
            <div id="main" <?php if($check_fullwidth) : ?>class="fullwidth"<?php endif; ?>>
                   
                <div class="sp-row post-layout <?php if($check_blog_layout == 'full_grid' && !is_paged()) : ?>full-grid<?php elseif($check_blog_layout == 'full_grid' && is_paged()) : ?>grid<?php elseif($check_blog_layout == 'grid') : ?>grid<?php endif; ?>">
 
                    <?php if($check_page_content) : ?>
                   
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                   
                            <?php get_template_part('content', 'page'); ?>
                               
                        <?php endwhile; endif; ?>
                   
                    <?php endif; ?>
                   
                    <?php if($check_blog_heading) : ?>
                    <span class="blog-heading">
                        <h2><?php echo esc_html($check_blog_heading); ?></h2>
                        <div class="blog-line"></div>
                    </span>
                    <?php endif; ?>
                   
                    <?php
                    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } elseif ( get_query_var('page') ) { $paged = get_query_var('page'); } else { $paged = 1; }
                    $args = array(
                        'posts_per_page' => $check_number_posts,
                        'paged'          => $paged,
                        'category_name' => $check_category
                    );
                    $the_query = new WP_Query( $args );
                    ?>
                   
                    <?php $sp_count = 0; ?>
                    <?php if ($the_query->have_posts()) : ?>
 
                    <div class="blog-wrapper">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                       
                        <?php if($check_blog_layout == 'grid') : ?>
 
                            <?php include(locate_template('content-grid.php')); ?>
                       
                        <?php elseif($check_blog_layout == 'full_grid') : ?>
                       
                            <?php if( $the_query->current_post == 0 && !is_paged() ) : ?>
                                <?php get_template_part('content'); ?>
                            <?php else : ?>
                                <?php include(locate_template('content-grid.php')); ?>
                            <?php endif; ?>
                       
                        <?php elseif($check_blog_layout == 'list') : ?>
                           
                            <?php get_template_part('content', 'list'); ?>
                           
                        <?php elseif($check_blog_layout == 'full_list') : ?>
                       
                            <?php if( $the_query->current_post == 0 && !is_paged() ) : ?>
                                <?php get_template_part('content'); ?>
                            <?php else : ?>
                                <?php get_template_part('content', 'list'); ?>
                            <?php endif; ?>
                       
                        <?php elseif($check_blog_layout == 'list_alt') : ?>
                            <?php $sp_count++; ?>
                            <?php if($sp_count % 2 == 0) : ?>
                            <?php get_template_part('content', 'list'); ?>
                            <?php else : ?>
                            <?php get_template_part('content', 'list-alt'); ?>
                            <?php endif; ?>
                           
                        <?php elseif($check_blog_layout == 'full_list_alt') : ?>
                           
                            <?php $sp_count++; ?>
                           
                            <?php if( $the_query->current_post == 0 && !is_paged() ) : ?>
                                <?php get_template_part('content'); ?>
                            <?php else : ?>
                                <?php if($sp_count % 2 == 0) : ?>
                                <?php get_template_part('content', 'list'); ?>
                                <?php else : ?>
                                <?php get_template_part('content', 'list-alt'); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                           
                        <?php else : ?>
                           
                            <?php get_template_part('content'); ?>
                           
                        <?php endif; ?>
                   
                    <?php endwhile; ?>
                       
                   
                        <div class="sp-col-12">
                            <div class="hawthorn-pagination">
                               
                                <div class="older"><?php next_posts_link(wp_kses( __( 'Older Posts <i class="fa fa-angle-right"></i>', 'hawthorn' ), array( 'i' => array( 'class' => array() ) ) ), $the_query->max_num_pages); ?></div>
                                <div class="newer"><?php previous_posts_link(wp_kses( __( '<i class="fa fa-angle-left"></i> Newer Posts', 'hawthorn' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>
                               
                            </div>
                        </div>
                       
                       
                    </div>
                   
                    <?php endif; ?>
                   
                </div>
               
            </div>
           
<?php if($check_fullwidth) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>