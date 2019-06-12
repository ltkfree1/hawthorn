<?php
/*
* Customizer - Add Dynamic CSS
*/
function hawthorn_dynamic_css() {
    $css = '';
	
	if(get_theme_mod('hawthorn_header_padding_top')) {
        $css .= '#header { padding-top: '. get_theme_mod('hawthorn_header_padding_top') .'px; }';
    }
	if(get_theme_mod('hawthorn_header_padding_bottom')) {
        $css .= '#header { padding-bottom: '. get_theme_mod('hawthorn_header_padding_bottom') .'px; }';
    }
	if(get_theme_mod('hawthorn_header_padding_disable')) {
        $css .= '#header { padding-bottom: 0px; padding-top:0px; }';
    }
	if(get_theme_mod('hawthorn_background_color')) {
        $css .= 'body { background-color: '. get_theme_mod('hawthorn_background_color') .'; }';
    }
	if(get_theme_mod('hawthorn_background_bg_image')) {
        $css .= 'body { background-image:url('. get_theme_mod('hawthorn_background_bg_image') .'); }';
    }
	if(get_theme_mod('hawthorn_background_bg_repeat')) {
        $css .= 'body { background-repeat: '. get_theme_mod('hawthorn_background_bg_repeat') .'; }';
    }
	if(get_theme_mod('hawthorn_background_bg_size')) {
        $css .= 'body { background-size: '. get_theme_mod('hawthorn_background_bg_size') .'; }';
    }
	if(get_theme_mod('hawthorn_background_bg_position')) {
        $css .= 'body { background-position: '. get_theme_mod('hawthorn_background_bg_position') .'; }';
    }
	if(get_theme_mod('hawthorn_background_bg_attachment')) {
        $css .= 'body { background-attachment: '. get_theme_mod('hawthorn_background_bg_attachment') .'; }';
    }
	if(get_theme_mod('hawthorn_header_bg_color')) {
        $css .= '#header { background-color: '. get_theme_mod('hawthorn_header_bg_color') .'; }';
    }
	if(get_theme_mod('hawthorn_header_bg_image')) {
        $css .= '#header { background-image:url('. get_theme_mod('hawthorn_header_bg_image') .'); }';
    }
	if(get_theme_mod('hawthorn_header_bg_repeat')) {
        $css .= '#header { background-repeat: '. get_theme_mod('hawthorn_header_bg_repeat') .'; }';
    }
	if(get_theme_mod('hawthorn_header_bg_size')) {
        $css .= '#header { background-size: '. get_theme_mod('hawthorn_header_bg_size') .'; }';
    }
	if(get_theme_mod('hawthorn_header_bg_position')) {
        $css .= '#header { background-position: '. get_theme_mod('hawthorn_header_bg_position') .'; }';
    }
	if(get_theme_mod('hawthorn_header_bg_attachment')) {
        $css .= '#header { background-attachment: '. get_theme_mod('hawthorn_header_bg_attachment') .'; }';
    }
	if(get_theme_mod('hawthorn_header_social_color')) {
        $css .= '#top-social a, #mobile-top-social a { color: '. get_theme_mod('hawthorn_header_social_color') .'; }';
    }
	if(get_theme_mod('hawthorn_header_social_color_hover')) {
        $css .= '#top-social a:hover, #mobile-top-social a:hover { color: '. get_theme_mod('hawthorn_header_social_color_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_header_search_color')) {
        $css .= '.desk-top-search a, .desk-show-search .close-search, .mobile-top-search a, .mobile-show-search .close-search { color: '. get_theme_mod('hawthorn_header_search_color') .'; }';
    }
	if(get_theme_mod('hawthorn_header_search_color_hover')) {
        $css .= '.desk-top-search a:hover, .desk-show-search a.close-search:hover, .mobile-top-search a:hover, .mobile-show-search a.close-search:hover { color: '. get_theme_mod('hawthorn_header_search_color_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_header_cart_color')) {
        $css .= '.cart-contents:before { color: '. get_theme_mod('hawthorn_header_cart_color') .'; }';
    }
	if(get_theme_mod('hawthorn_header_cart_counter')) {
        $css .= '.cart-contents .sp-count { background-color: '. get_theme_mod('hawthorn_header_cart_counter') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_bg')) {
        $css .= '#navigation, #nav-wrapper .menu { background-color: '. get_theme_mod('hawthorn_nav_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_line')) {
        $css .= '#nav-wrapper:before { background-color: '. get_theme_mod('hawthorn_nav_line') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_text_color')) {
        $css .= '#nav-wrapper .menu li a { color: '. get_theme_mod('hawthorn_nav_text_color') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_text_color_hover')) {
        $css .= '#nav-wrapper .menu li a:hover { color: '. get_theme_mod('hawthorn_nav_text_color_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_drop_arrow')) {
        $css .= '#nav-wrapper .menu li.menu-item-has-children > a:after { color: '. get_theme_mod('hawthorn_nav_drop_arrow') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_shadow')) {
        $css .= '#navigation { box-shadow: 0 10px 22px rgba(0, 0, 0, '. get_theme_mod('hawthorn_nav_shadow_opacity', '0.05') .'); }';
    }
	if(get_theme_mod('hawthorn_nav_margin_bottom')) {
        $css .= '#navigation { margin-bottom: '. get_theme_mod('hawthorn_nav_margin_bottom') .'px; }';
    }
	if(get_theme_mod('hawthorn_nav_dropdown_bg')) {
        $css .= '#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { background-color: '. get_theme_mod('hawthorn_nav_dropdown_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_dropdown_bg')) {
        $css .= '#nav-wrapper > .menu > li > .sub-menu:before { border-bottom:6px solid '. get_theme_mod('hawthorn_nav_dropdown_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_dropdown_border')) {
        $css .= '#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { border-color: '. get_theme_mod('hawthorn_nav_dropdown_border') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_dropdown_text_color')) {
        $css .= '#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { color: '. get_theme_mod('hawthorn_nav_dropdown_text_color') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_dropdown_text_hover_bg')) {
        $css .= '#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover { background-color: '. get_theme_mod('hawthorn_nav_dropdown_text_hover_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_nav_dropdown_text_hover_color')) {
        $css .= '#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover { color: '. get_theme_mod('hawthorn_nav_dropdown_text_hover_color') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_topbar')) {
        $css .= '#mobile-top { background-color: '. get_theme_mod('hawthorn_mobile_topbar') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_show')) {
        $css .= '.slicknav_menu .slicknav_menutxt { color: '. get_theme_mod('hawthorn_mobile_show') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_show_hover')) {
        $css .= '.slicknav_menu .slicknav_menutxt:hover { color: '. get_theme_mod('hawthorn_mobile_show_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_burger')) {
        $css .= '.slicknav_menu .slicknav_icon-bar { background-color: '. get_theme_mod('hawthorn_mobile_burger') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_dropdown_bg')) {
        $css .= '.slicknav_nav, .slicknav_nav ul { background-color: '. get_theme_mod('hawthorn_mobile_dropdown_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_dropdown_border')) {
        $css .= '.slicknav_nav a, .slicknav_nav, .slicknav_nav ul { border-color: '. get_theme_mod('hawthorn_mobile_dropdown_border') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_dropdown_text')) {
        $css .= '.slicknav_nav a, .slicknav_nav .slicknav_arrow { color: '. get_theme_mod('hawthorn_mobile_dropdown_text') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_dropdown_text_hover')) {
        $css .= '.slicknav_nav a:hover { color: '. get_theme_mod('hawthorn_mobile_dropdown_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_dropdown_text_bg_hover')) {
        $css .= '.slicknav_nav a:hover, .slicknav_nav .slicknav_item:hover { background-color: '. get_theme_mod('hawthorn_mobile_dropdown_text_bg_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_mobile_header_padding_bottom')) {
        $css .= '@media only screen and (min-width: 767px) and (max-width: 942px) { #header-mobile-wrapper { padding-bottom: '. get_theme_mod('hawthorn_mobile_header_padding_bottom') .'px;} }';
		$css .= '@media only screen and (max-width: 766px) { #header-mobile-wrapper { padding-bottom: '. get_theme_mod('hawthorn_mobile_header_padding_bottom') .'px;} }';
    }
	if(get_theme_mod('hawthorn_color_featured_bg')) {
        $css .= '.feat-item { background-color: '. get_theme_mod('hawthorn_color_featured_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_cat')) {
        $css .= '.feat-content .cat a { color: '. get_theme_mod('hawthorn_color_featured_cat') .'; }';
		$css .= '.feat-content .cat:before { border-top:2px solid '. get_theme_mod('hawthorn_color_featured_cat') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_title')) {
        $css .= '.feat-content h2 a { color: '. get_theme_mod('hawthorn_color_featured_title') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_excerpt')) {
        $css .= '.feat-content p { color: '. get_theme_mod('hawthorn_color_featured_excerpt') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_button_bg')) {
        $css .= '.feat-more { background-color: '. get_theme_mod('hawthorn_color_featured_button_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_button_border')) {
        $css .= '.feat-more { border:1px solid '. get_theme_mod('hawthorn_color_featured_button_border') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_button_text')) {
        $css .= '.feat-more { color: '. get_theme_mod('hawthorn_color_featured_button_text') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_button_bg_hover')) {
        $css .= '.feat-item .feat-more:hover { background-color: '. get_theme_mod('hawthorn_color_featured_button_bg_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_button_border_hover')) {
        $css .= '.feat-item .feat-more:hover { border:1px solid '. get_theme_mod('hawthorn_color_featured_button_border_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_button_text_hover')) {
        $css .= '.feat-item .feat-more:hover { color: '. get_theme_mod('hawthorn_color_featured_button_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_pagi_text')) {
        $css .= '.bx-wrapper .bx-controls-direction a { color: '. get_theme_mod('hawthorn_color_featured_pagi_text') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_pagi_text_hover')) {
        $css .= '.bx-wrapper .bx-controls-direction a:hover { color: '. get_theme_mod('hawthorn_color_featured_pagi_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_color_featured_pagi_count')) {
        $css .= '.bx-wrapper .bx-pager { color: '. get_theme_mod('hawthorn_color_featured_pagi_count') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_title')) {
        $css .= '.post-header h2 a, .post-header h1, .grid-item .post-header h2 a { color: '. get_theme_mod('hawthorn_post_color_title') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_cat')) {
        $css .= '.post-header .cat a, .short-header .cat a { color: '. get_theme_mod('hawthorn_post_color_cat') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_date')) {
        $css .= '.sp-date, .sp-date a { color: '. get_theme_mod('hawthorn_post_color_date') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_text')) {
        $css .= '.post-entry p, .entry-content p, .post-entry, .post-entry ul li, .post-entry ol li { color: '. get_theme_mod('hawthorn_post_color_text') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_text_heading')) {
        $css .= '.post-entry h1, .post-entry h2, .post-entry h3, .post-entry h4, .post-entry h5, .post-entry h6 { color: '. get_theme_mod('hawthorn_post_color_text_heading') .'; }';
    }
	if(get_theme_mod('hawthorn_post_tag_bg')) {
        $css .= '.widget .tagcloud a, .post-tags a { background: '. get_theme_mod('hawthorn_post_tag_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_post_tag_text')) {
        $css .= '.widget .tagcloud a, .post-tags a { color: '. get_theme_mod('hawthorn_post_tag_text') .'; }';
    }
	if(get_theme_mod('hawthorn_post_tag_bg_hover')) {
        $css .= '.widget .tagcloud a:hover, .post-tags a:hover { background: '. get_theme_mod('hawthorn_post_tag_bg_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_post_tag_text_hover')) {
        $css .= '.widget .tagcloud a:hover, .post-tags a:hover { color: '. get_theme_mod('hawthorn_post_tag_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_meta_bg')) {
        $css .= '.post-meta { background-color: '. get_theme_mod('hawthorn_post_color_meta_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_meta_author')) {
        $css .= '.meta-author a, .meta-author .by { color: '. get_theme_mod('hawthorn_post_color_meta_author') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_meta_share')) {
        $css .= '.meta-share a { color: '. get_theme_mod('hawthorn_post_color_meta_share') .'; }';
    }
	if(get_theme_mod('hawthorn_post_color_meta_comments')) {
        $css .= '.meta-comments a, .meta-comments a .by { color: '. get_theme_mod('hawthorn_post_color_meta_comments') .'; }';
    }
	if(get_theme_mod('hawthorn_post_quote_border')) {
        $css .= '.post-entry blockquote, .entry-content blockquote { border-color: '. get_theme_mod('hawthorn_post_quote_border') .'; }';
    }
	if(get_theme_mod('hawthorn_post_quote_text')) {
        $css .= '.post-entry blockquote p, .entry-content blockquote p { color: '. get_theme_mod('hawthorn_post_quote_text') .'; }';
    }
	if(get_theme_mod('hawthorn_post_comment_button_bg')) {
        $css .= '#respond #submit { background: '. get_theme_mod('hawthorn_post_comment_button_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_post_comment_button_text')) {
        $css .= '#respond #submit { color: '. get_theme_mod('hawthorn_post_comment_button_text') .'; }';
    }
	if(get_theme_mod('hawthorn_post_comment_button_bg_hover')) {
        $css .= '#respond #submit:hover { background: '. get_theme_mod('hawthorn_post_comment_button_bg_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_post_comment_button_text_hover')) {
        $css .= '#respond #submit:hover { color: '. get_theme_mod('hawthorn_post_comment_button_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_title_bg')) {
        $css .= '#sidebar .widget-title { background-color: '. get_theme_mod('hawthorn_sidebar_color_title_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_title_text')) {
        $css .= '#sidebar .widget-title { color: '. get_theme_mod('hawthorn_sidebar_color_title_text') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_title_shadow_opacity')) {
        $css .= '#sidebar .widget-title { box-shadow: 0 12px 24px rgba(0, 0, 0, '. get_theme_mod('hawthorn_sidebar_color_title_shadow_opacity') .'); }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_title_shadow')) {
        $css .= '#sidebar .widget-title { box-shadow:none; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_social_bg')) {
        $css .= '.social-widget a { background-color: '. get_theme_mod('hawthorn_sidebar_color_social_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_social_text')) {
        $css .= '.social-widget a { color: '. get_theme_mod('hawthorn_sidebar_color_social_text') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_social_bg_hover')) {
        $css .= '.social-widget a:hover { background-color: '. get_theme_mod('hawthorn_sidebar_color_social_bg_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_social_text_hover')) {
        $css .= '.social-widget a:hover { color: '. get_theme_mod('hawthorn_sidebar_color_social_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_post_count_bg')) {
        $css .= '.side-count { background-color: '. get_theme_mod('hawthorn_sidebar_color_post_count_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_sidebar_color_post_count_text')) {
        $css .= '.side-count { color: '. get_theme_mod('hawthorn_sidebar_color_post_count_text') .'; }';
    }
	if(get_theme_mod('hawthorn_footer_color_bg')) {
        $css .= '#footer { background-color: '. get_theme_mod('hawthorn_footer_color_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_footer_color_widget_title')) {
        $css .= '.footer-widgets .widget-title { color: '. get_theme_mod('hawthorn_footer_color_widget_title') .'; }';
    }
	if(get_theme_mod('hawthorn_footer_color_widget_lists')) {
        $css .= '.footer-widgets .widget ul li a { color: '. get_theme_mod('hawthorn_footer_color_widget_lists') .'; }';
    }
	if(get_theme_mod('hawthorn_footer_color_widget_links')) {
        $css .= '.footer-widgets .widget p a { color: '. get_theme_mod('hawthorn_footer_color_widget_links') .'; }';
    }
	if(get_theme_mod('hawthorn_footer_color_widget_text')) {
        $css .= '.footer-widgets .widget p, .footer-widgets .widget { color: '. get_theme_mod('hawthorn_footer_color_widget_text') .'; }';
    }
	if(get_theme_mod('hawthorn_footer_color_widget_post_links')) {
        $css .= '.footer-widgets .side-pop-content h4 a { color: '. get_theme_mod('hawthorn_footer_color_widget_post_links') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_bg')) {
        $css .= '#footer-bottom { background-color: '. get_theme_mod('hawthorn_footer2_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_social_icon_text')) {
        $css .= '.footer-social a { color: '. get_theme_mod('hawthorn_footer2_social_icon_text') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_social_icon')) {
        $css .= '.footer-social a i { color: '. get_theme_mod('hawthorn_footer2_social_icon') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_social_icon_text_hover')) {
        $css .= '.footer-social a:hover { color: '. get_theme_mod('hawthorn_footer2_social_icon_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_social_icon_hover')) {
        $css .= '.footer-social a:hover i { color: '. get_theme_mod('hawthorn_footer2_social_icon_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_social_separator_line')) {
        $css .= '.footer-social { border-bottom:1px solid '. get_theme_mod('hawthorn_footer2_social_separator_line') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_madeby_text')) {
        $css .= '.footer-text p.madewidth { color: '. get_theme_mod('hawthorn_footer2_madeby_text') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_madeby_icon')) {
        $css .= '.footer-text p.madewidth i { color: '. get_theme_mod('hawthorn_footer2_madeby_icon') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_copy_link')) {
        $css .= '.footer-text a { color: '. get_theme_mod('hawthorn_footer2_copy_link') .'; }';
    }
	if(get_theme_mod('hawthorn_footer2_copy_text')) {
        $css .= '.footer-text p { color: '. get_theme_mod('hawthorn_footer2_copy_text') .'; }';
    }
	if(get_theme_mod('hawthorn_newsletter_color_bg')) {
        $css .= '.subscribe-box { background-color: '. get_theme_mod('hawthorn_newsletter_color_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_newsletter_color_title')) {
        $css .= '.subscribe-box h4 { color: '. get_theme_mod('hawthorn_newsletter_color_title') .'; }';
    }
	if(get_theme_mod('hawthorn_newsletter_color_subtitle')) {
        $css .= '.subscribe-box p { color: '. get_theme_mod('hawthorn_newsletter_color_subtitle') .'; }';
    }
	if(get_theme_mod('hawthorn_newsletter_color_input_bg')) {
        $css .= '.subscribe-box input { background-color: '. get_theme_mod('hawthorn_newsletter_color_input_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_newsletter_color_input_text')) {
        $css .= '.subscribe-box input, .subscribe-box ::-webkit-input-placeholder { color: '. get_theme_mod('hawthorn_newsletter_color_input_text') .'; }';
    }
	if(get_theme_mod('hawthorn_newsletter_color_mail_white')) {
        $css .= '.email-icon { background-image:url('. get_template_directory_uri() .'/img/newsletter_white.png); }';
    }
	if(get_theme_mod('hawthorn_misc_color_accent')) {
        $css .= 'a, .woocommerce .star-rating { color: '. get_theme_mod('hawthorn_misc_color_accent') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_pagination_bg')) {
        $css .= '.hawthorn-pagination a { background: '. get_theme_mod('hawthorn_misc_pagination_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_pagination_text')) {
        $css .= '.hawthorn-pagination a { color: '. get_theme_mod('hawthorn_misc_pagination_text') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_pagination_bg_hover')) {
        $css .= '.hawthorn-pagination a:hover { background: '. get_theme_mod('hawthorn_misc_pagination_bg_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_pagination_text_hover')) {
        $css .= '.hawthorn-pagination a:hover { color: '. get_theme_mod('hawthorn_misc_pagination_text_hover') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_cat_bg')) {
        $css .= '.archive-box { background-color: '. get_theme_mod('hawthorn_misc_cat_bg') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_cat_title')) {
        $css .= '.archive-box h1 { color: '. get_theme_mod('hawthorn_misc_cat_title') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_cat_description')) {
        $css .= '.archive-box p { color: '. get_theme_mod('hawthorn_misc_cat_description') .'; }';
    }
	if(get_theme_mod('hawthorn_misc_cat_browsing')) {
        $css .= '.archive-box span { color: '. get_theme_mod('hawthorn_misc_cat_browsing') .'; }';
    }
	if(get_theme_mod('hawthorn_featured_counter_hide')) {
        $css .= '.bx-pager.bx-default-pager { display:none; }';
    }
	
   
    if( !empty( $css ) ) {
        wp_add_inline_style( 'hawthorn-style', $css );
    }
}
add_action( 'wp_enqueue_scripts', 'hawthorn_dynamic_css' );

if(!function_exists('hawthorn_dynamic_customizer_css')) {
function hawthorn_dynamic_customizer_css() {
	
	$css = '.editor-styles-wrapper p a { color: '. get_theme_mod('hawthorn_misc_color_accent', '#c3a26e') .'; }';
	$css .= '.editor-post-title__block .editor-post-title__input { color: '. get_theme_mod('hawthorn_post_color_title', '#000000') .' !important; }';
	$css .= '.editor-styles-wrapper p { color: '. get_theme_mod('hawthorn_post_color_text', '#222222') .'; }';
	$css .= '.editor-styles-wrapper .wp-block-heading h1, .editor-styles-wrapper .wp-block-heading h2, .editor-styles-wrapper .wp-block-heading h3, .editor-styles-wrapper .wp-block-heading h4, .editor-styles-wrapper .wp-block-heading h5, .editor-styles-wrapper .wp-block-heading h6 { color: '. get_theme_mod('hawthorn_post_color_text_heading', '#000000') .'; }';
	
	return $css;
	
}
}