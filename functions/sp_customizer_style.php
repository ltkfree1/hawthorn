<?php
//////////////////////////////////////////////////////////////////
// Customizer - Add CSS
//////////////////////////////////////////////////////////////////
function hawthorn_customizer_css() {
    ?>
    <style type="text/css">
	
		<?php if(get_theme_mod('hawthorn_header_padding_top')) : ?>#header { padding-top:<?php echo get_theme_mod('hawthorn_header_padding_top'); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_padding_bottom')) : ?>#header { padding-bottom:<?php echo get_theme_mod('hawthorn_header_padding_bottom'); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_padding_disable')) : ?>#header { padding-bottom:0; padding-top:0; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_background_color' )) : ?>body { background-color:<?php echo get_theme_mod('hawthorn_background_color'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_background_bg_image' )) : ?>body { background-image:url(<?php echo get_theme_mod( 'hawthorn_background_bg_image' ); ?>); }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_background_bg_repeat' )) : ?>body { background-repeat:<?php echo get_theme_mod( 'hawthorn_background_bg_repeat' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_background_bg_size' )) : ?>body { background-size:<?php echo get_theme_mod( 'hawthorn_background_bg_size' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_background_bg_position' )) : ?>body { background-position:<?php echo get_theme_mod( 'hawthorn_background_bg_position' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_background_bg_attachment' )) : ?>body { background-attachment:<?php echo get_theme_mod( 'hawthorn_background_bg_attachment' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod('hawthorn_header_bg_color')) : ?>#header { background-color:<?php echo get_theme_mod('hawthorn_header_bg_color'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_header_bg_image' )) : ?>#header { background-image:url(<?php echo get_theme_mod( 'hawthorn_header_bg_image' ); ?>); }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_header_bg_repeat' )) : ?>#header { background-repeat:<?php echo get_theme_mod( 'hawthorn_header_bg_repeat' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_header_bg_size' )) : ?>#header { background-size:<?php echo get_theme_mod( 'hawthorn_header_bg_size' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_header_bg_position' )) : ?>#header { background-position:<?php echo get_theme_mod( 'hawthorn_header_bg_position' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_header_bg_attachment' )) : ?>#header { background-attachment:<?php echo get_theme_mod( 'hawthorn_header_bg_attachment' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_social_color')) : ?>#top-social a, #mobile-top-social a { color:<?php echo get_theme_mod('hawthorn_header_social_color'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_social_color_hover')) : ?>#top-social a:hover, #mobile-top-social a:hover { color:<?php echo get_theme_mod('hawthorn_header_social_color_hover'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_search_color')) : ?>.desk-top-search a, .desk-show-search .close-search, .mobile-top-search a, .mobile-show-search .close-search { color:<?php echo get_theme_mod('hawthorn_header_search_color'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_search_color_hover')) : ?>.desk-top-search a:hover, .desk-show-search a.close-search:hover, .mobile-top-search a:hover, .mobile-show-search a.close-search:hover  { color:<?php echo get_theme_mod('hawthorn_header_search_color_hover'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_header_bg_position' )) : ?>#header { background-position:<?php echo get_theme_mod( 'hawthorn_header_bg_position' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_cart_color')) : ?>.cart-contents:before { color:<?php echo get_theme_mod('hawthorn_header_cart_color'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_header_cart_counter')) : ?>.cart-contents .sp-count { background-color:<?php echo get_theme_mod('hawthorn_header_cart_counter'); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod('hawthorn_nav_bg')) : ?>#navigation, #nav-wrapper .menu { background-color:<?php echo get_theme_mod('hawthorn_nav_bg'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_nav_line')) : ?>#nav-wrapper:before { background-color:<?php echo get_theme_mod('hawthorn_nav_line'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_nav_text_color')) : ?>#nav-wrapper .menu li a { color:<?php echo get_theme_mod('hawthorn_nav_text_color'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_nav_text_color_hover')) : ?>#nav-wrapper .menu li a:hover { color:<?php echo get_theme_mod('hawthorn_nav_text_color_hover'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_nav_drop_arrow')) : ?>#nav-wrapper .menu li.menu-item-has-children > a:after { color:<?php echo get_theme_mod('hawthorn_nav_drop_arrow'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_nav_shadow')) : ?>#navigation { box-shadow: 0 10px 22px rgba(0, 0, 0, <?php if(get_theme_mod('hawthorn_nav_shadow_opacity')) : ?><?php echo get_theme_mod('hawthorn_nav_shadow_opacity'); ?><?php else : ?>0.05<?php endif; ?>); }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_nav_margin_bottom')) : ?>#navigation { margin-bottom: <?php echo get_theme_mod('hawthorn_nav_margin_bottom'); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_nav_dropdown_bg' )) : ?>#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { background-color:<?php echo get_theme_mod( 'hawthorn_nav_dropdown_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_nav_dropdown_bg' )) : ?>#nav-wrapper > .menu > li > .sub-menu:before {border-bottom: 6px solid <?php echo get_theme_mod( 'hawthorn_nav_dropdown_bg' ); ?>;} <?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_nav_dropdown_border' )) : ?>#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { border-color:<?php echo get_theme_mod( 'hawthorn_nav_dropdown_border' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_nav_dropdown_text_color' )) : ?>#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { color:<?php echo get_theme_mod( 'hawthorn_nav_dropdown_text_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_nav_dropdown_text_hover_bg' )) : ?>#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover { background-color:<?php echo get_theme_mod( 'hawthorn_nav_dropdown_text_hover_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_nav_dropdown_text_hover_color' )) : ?>#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover { color:<?php echo get_theme_mod( 'hawthorn_nav_dropdown_text_hover_color' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_mobile_topbar' )) : ?>#mobile-top { background-color:<?php echo get_theme_mod( 'hawthorn_mobile_topbar' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_show' )) : ?>.slicknav_menu .slicknav_menutxt { color:<?php echo get_theme_mod( 'hawthorn_mobile_show' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_show_hover' )) : ?>.slicknav_menu .slicknav_menutxt:hover { color:<?php echo get_theme_mod( 'hawthorn_mobile_show_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_burger' )) : ?>.slicknav_menu .slicknav_icon-bar { background-color:<?php echo get_theme_mod( 'hawthorn_mobile_burger' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_dropdown_bg' )) : ?>.slicknav_nav, .slicknav_nav ul { background-color:<?php echo get_theme_mod( 'hawthorn_mobile_dropdown_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_dropdown_border' )) : ?>.slicknav_nav a, .slicknav_nav, .slicknav_nav ul { border-color:<?php echo get_theme_mod( 'hawthorn_mobile_dropdown_border' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_dropdown_text' )) : ?>.slicknav_nav a, .slicknav_nav .slicknav_arrow { color:<?php echo get_theme_mod( 'hawthorn_mobile_dropdown_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_dropdown_text_hover' )) : ?>.slicknav_nav a:hover { color:<?php echo get_theme_mod( 'hawthorn_mobile_dropdown_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_dropdown_text_bg_hover' )) : ?>.slicknav_nav a:hover, .slicknav_nav .slicknav_item:hover { background-color:<?php echo get_theme_mod( 'hawthorn_mobile_dropdown_text_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_mobile_header_padding_bottom' )) : ?>
		@media only screen and (min-width: 767px) and (max-width: 942px) { #header-mobile-wrapper {padding-bottom:<?php echo get_theme_mod( 'hawthorn_mobile_header_padding_bottom' ); ?>px;} }
		@media only screen and (max-width: 766px) { #header-mobile-wrapper {padding-bottom:<?php echo get_theme_mod( 'hawthorn_mobile_header_padding_bottom' ); ?>px;} }
		<?php endif; ?>
		
		<?php if(get_theme_mod('hawthorn_color_featured_bg')) : ?>.feat-item { background-color:<?php echo get_theme_mod('hawthorn_color_featured_bg'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_cat')) : ?>.feat-content .cat a{ color:<?php echo get_theme_mod('hawthorn_color_featured_cat'); ?>; } .feat-content .cat:before { border-top:2px solid <?php echo get_theme_mod('hawthorn_color_featured_cat'); ?>; } <?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_title')) : ?>.feat-content h2 a { color:<?php echo get_theme_mod('hawthorn_color_featured_title'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_excerpt')) : ?>.feat-content p { color:<?php echo get_theme_mod('hawthorn_color_featured_excerpt'); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod('hawthorn_color_featured_button_bg')) : ?>.feat-more { background-color:<?php echo get_theme_mod('hawthorn_color_featured_button_bg'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_button_border')) : ?>.feat-more { border:1px solid <?php echo get_theme_mod('hawthorn_color_featured_button_border'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_button_text')) : ?>.feat-more { color:<?php echo get_theme_mod('hawthorn_color_featured_button_text'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_button_bg_hover')) : ?>.feat-item .feat-more:hover { background-color:<?php echo get_theme_mod('hawthorn_color_featured_button_bg_hover'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_button_border_hover')) : ?>.feat-item .feat-more:hover { border:1px solid <?php echo get_theme_mod('hawthorn_color_featured_button_border_hover'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_button_text_hover')) : ?>.feat-item .feat-more:hover { color:<?php echo get_theme_mod('hawthorn_color_featured_button_text_hover'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_pagi_text')) : ?>.bx-wrapper .bx-controls-direction a { color:<?php echo get_theme_mod('hawthorn_color_featured_pagi_text'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_pagi_text_hover')) : ?>.bx-wrapper .bx-controls-direction a:hover { color:<?php echo get_theme_mod('hawthorn_color_featured_pagi_text_hover'); ?>; }<?php endif; ?>
		<?php if(get_theme_mod('hawthorn_color_featured_pagi_count')) : ?>.bx-wrapper .bx-pager { color:<?php echo get_theme_mod('hawthorn_color_featured_pagi_count'); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_post_color_title' )) : ?>.post-header h2 a, .post-header h1, .grid-item .post-header h2 a { color:<?php echo get_theme_mod( 'hawthorn_post_color_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_cat' )) : ?>.post-header .cat a, .short-header .cat a { color:<?php echo get_theme_mod( 'hawthorn_post_color_cat' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_date' )) : ?>.sp-date, .sp-date a { color:<?php echo get_theme_mod( 'hawthorn_post_color_date' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_text' )) : ?>.post-entry p, .entry-content p, .post-entry, .post-entry ul li, .post-entry ol li { color:<?php echo get_theme_mod( 'hawthorn_post_color_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_text_heading' )) : ?>.post-entry h1, .post-entry h2, .post-entry h3, .post-entry h4, .post-entry h5, .post-entry h6 { color:<?php echo get_theme_mod( 'hawthorn_post_color_text_heading' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_tag_bg' )) : ?>.widget .tagcloud a, .post-tags a { background:<?php echo get_theme_mod( 'hawthorn_post_tag_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_tag_text' )) : ?>.widget .tagcloud a, .post-tags a { color:<?php echo get_theme_mod( 'hawthorn_post_tag_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_tag_bg_hover' )) : ?>.widget .tagcloud a:hover, .post-tags a:hover { background:<?php echo get_theme_mod( 'hawthorn_post_tag_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_tag_text_hover' )) : ?>.widget .tagcloud a:hover, .post-tags a:hover { color:<?php echo get_theme_mod( 'hawthorn_post_tag_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_meta_bg' )) : ?>.post-meta { background-color:<?php echo get_theme_mod( 'hawthorn_post_color_meta_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_meta_author' )) : ?>.meta-author a, .meta-author .by { color:<?php echo get_theme_mod( 'hawthorn_post_color_meta_author' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_meta_share' )) : ?>.meta-share a { color:<?php echo get_theme_mod( 'hawthorn_post_color_meta_share' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_color_meta_comments' )) : ?>.meta-comments a, .meta-comments a .by { color:<?php echo get_theme_mod( 'hawthorn_post_color_meta_comments' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_quote_border' )) : ?>.post-entry blockquote, .entry-content blockquote { border-color:<?php echo get_theme_mod( 'hawthorn_post_quote_border' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_quote_text' )) : ?>.post-entry blockquote p, .entry-content blockquote p { color:<?php echo get_theme_mod( 'hawthorn_post_quote_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_comment_button_bg' )) : ?>#respond #submit { background:<?php echo get_theme_mod( 'hawthorn_post_comment_button_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_comment_button_text' )) : ?>#respond #submit { color:<?php echo get_theme_mod( 'hawthorn_post_comment_button_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_comment_button_bg_hover' )) : ?>#respond #submit:hover { background:<?php echo get_theme_mod( 'hawthorn_post_comment_button_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_post_comment_button_text_hover' )) : ?>#respond #submit:hover { color:<?php echo get_theme_mod( 'hawthorn_post_comment_button_text_hover' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_title_bg' )) : ?>#sidebar .widget-title { background-color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_title_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_title_text' )) : ?>#sidebar .widget-title { color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_title_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_title_shadow_opacity' )) : ?>#sidebar .widget-title { box-shadow: 0 12px 24px rgba(0, 0, 0, <?php echo get_theme_mod( 'hawthorn_sidebar_color_title_shadow_opacity' ); ?>); }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_title_shadow' )) : ?>#sidebar .widget-title { box-shadow:none; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_social_bg' )) : ?>.social-widget a { background-color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_social_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_social_text' )) : ?>.social-widget a { color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_social_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_social_bg_hover' )) : ?>.social-widget a:hover { background-color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_social_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_social_text_hover' )) : ?>.social-widget a:hover { color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_social_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_post_count_bg' )) : ?>.side-count { background-color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_post_count_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_sidebar_color_post_count_text' )) : ?>.side-count { color:<?php echo get_theme_mod( 'hawthorn_sidebar_color_post_count_text' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_footer_color_bg' )) : ?>#footer { background-color:<?php echo get_theme_mod( 'hawthorn_footer_color_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer_color_widget_title' )) : ?>.footer-widgets .widget-title { color:<?php echo get_theme_mod( 'hawthorn_footer_color_widget_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer_color_widget_lists' )) : ?>.footer-widgets .widget ul li a { color:<?php echo get_theme_mod( 'hawthorn_footer_color_widget_lists' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer_color_widget_links' )) : ?>.footer-widgets .widget p a { color:<?php echo get_theme_mod( 'hawthorn_footer_color_widget_links' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer_color_widget_text' )) : ?>.footer-widgets .widget p, .footer-widgets .widget { color:<?php echo get_theme_mod( 'hawthorn_footer_color_widget_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer_color_widget_post_links' )) : ?>.footer-widgets .side-pop-content h4 a { color:<?php echo get_theme_mod( 'hawthorn_footer_color_widget_post_links' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_bg' )) : ?>#footer-bottom { background-color:<?php echo get_theme_mod( 'hawthorn_footer2_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_social_icon_text' )) : ?>.footer-social a { color:<?php echo get_theme_mod( 'hawthorn_footer2_social_icon_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_social_icon' )) : ?>.footer-social a i { color:<?php echo get_theme_mod( 'hawthorn_footer2_social_icon' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_social_icon_text_hover' )) : ?>.footer-social a:hover { color:<?php echo get_theme_mod( 'hawthorn_footer2_social_icon_text_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_social_icon_hover' )) : ?>.footer-social a:hover i { color:<?php echo get_theme_mod( 'hawthorn_footer2_social_icon_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_social_separator_line' )) : ?>.footer-social { border-bottom:1px solid <?php echo get_theme_mod( 'hawthorn_footer2_social_separator_line' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_madeby_text' )) : ?>.footer-text p.madewidth { color:<?php echo get_theme_mod( 'hawthorn_footer2_madeby_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_madeby_icon' )) : ?>.footer-text p.madewidth i { color:<?php echo get_theme_mod( 'hawthorn_footer2_madeby_icon' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_copy_link' )) : ?>.footer-text a { color:<?php echo get_theme_mod( 'hawthorn_footer2_copy_link' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_footer2_copy_text' )) : ?>.footer-text p { color:<?php echo get_theme_mod( 'hawthorn_footer2_copy_text' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_newsletter_color_bg' )) : ?>.subscribe-box { background-color:<?php echo get_theme_mod( 'hawthorn_newsletter_color_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_newsletter_color_title' )) : ?>.subscribe-box h4 { color:<?php echo get_theme_mod( 'hawthorn_newsletter_color_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_newsletter_color_subtitle' )) : ?>.subscribe-box p { color:<?php echo get_theme_mod( 'hawthorn_newsletter_color_subtitle' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_newsletter_color_input_bg' )) : ?>.subscribe-box input { background-color:<?php echo get_theme_mod( 'hawthorn_newsletter_color_input_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_newsletter_color_input_text' )) : ?>.subscribe-box input, .subscribe-box ::-webkit-input-placeholder { color:<?php echo get_theme_mod( 'hawthorn_newsletter_color_input_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_newsletter_color_mail_white' )) : ?>.email-icon { background-image:url(<?php echo get_template_directory_uri(); ?>/img/newsletter_white.png); }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_misc_color_accent' )) : ?>a, .woocommerce .star-rating { color:<?php echo get_theme_mod( 'hawthorn_misc_color_accent' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_misc_pagination_bg' )) : ?>.hawthorn-pagination a { background:<?php echo get_theme_mod( 'hawthorn_misc_pagination_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_misc_pagination_text' )) : ?>.hawthorn-pagination a { color:<?php echo get_theme_mod( 'hawthorn_misc_pagination_text' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_misc_pagination_bg_hover' )) : ?>.hawthorn-pagination a:hover { background:<?php echo get_theme_mod( 'hawthorn_misc_pagination_bg_hover' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_misc_pagination_text_hover' )) : ?>.hawthorn-pagination a:hover { color:<?php echo get_theme_mod( 'hawthorn_misc_pagination_text_hover' ); ?>; }<?php endif; ?>
	
		<?php if(get_theme_mod( 'hawthorn_misc_cat_bg' )) : ?>.archive-box { background-color:<?php echo get_theme_mod( 'hawthorn_misc_cat_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_misc_cat_title' )) : ?>.archive-box h1 { color:<?php echo get_theme_mod( 'hawthorn_misc_cat_title' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_misc_cat_description' )) : ?>.archive-box p { color:<?php echo get_theme_mod( 'hawthorn_misc_cat_description' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'hawthorn_misc_cat_browsing' )) : ?>.archive-box span { color:<?php echo get_theme_mod( 'hawthorn_misc_cat_browsing' ); ?>; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'hawthorn_featured_counter_hide' )) : ?>.bx-pager.bx-default-pager { display:none; }<?php endif; ?>
		
    </style>
    <?php
}
add_action( 'wp_head', 'hawthorn_customizer_css' );

?>