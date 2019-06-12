<?php
	/*
		Get post layout
	*/
?>
	
<?php 

	$hawthorn_get_template = get_page_template_slug( $post->ID );

	if($hawthorn_get_template == 'single-sidebar.php') {
		get_template_part('single', 'sidebar');
	} elseif($hawthorn_get_template == 'single-fullwidth.php') {
		get_template_part('single', 'fullwidth');
	} else {
		$hawthorn_default_template = get_theme_mod('hawthorn_post_layout');
		if($hawthorn_default_template == 'post_fullwidth') {
			get_template_part('single', 'fullwidth');
		} elseif($hawthorn_default_template == 'post_sidebar') {
			get_template_part('single', 'sidebar');
		} else {
			get_template_part('single', 'sidebar');
		}
	}
	
?>