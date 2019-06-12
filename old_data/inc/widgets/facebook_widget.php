<?php
/**
 * Plugin Name: Facebook Widget
 */
if(!class_exists('hawthorn_facebook_widget')) {

add_action( 'widgets_init', 'hawthorn_facebook_load_widget' );

function hawthorn_facebook_load_widget() {
	register_widget( 'hawthorn_facebook_widget' );
}

class hawthorn_facebook_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'hawthorn_facebook_widget', 'description' => esc_html__('A widget that displays a Facebook Like Box', 'hawthorn') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'hawthorn_facebook_widget' );

		/* Create the widget. */
		parent::__construct( 'hawthorn_facebook_widget', esc_html__('Hawthorn: Facebook Like Box', 'hawthorn'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$page_url = $instance['page_url'];
		$faces = $instance['faces'];
		$stream = $instance['stream'];
		$cover = $instance['cover'];
		
		/* Before widget */
		echo wp_kses_post( $args['before_widget'] );

		/* Display the widget title if one was input */
		if ( $title ) {
			echo wp_kses_post( $args['before_title'] . $title . $args['after_title'] );
		}
		?>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-page" data-href="<?php echo esc_url($page_url); ?>" data-hide-cover="<?php if($cover) { echo 'false'; } else { echo 'true'; } ?>" data-show-facepile="<?php if($faces) { echo 'true'; } else { echo 'false'; } ?>" data-show-posts="<?php if($stream) { echo 'true'; } else { echo 'false'; } ?>"></div>
			
		<?php

		/* After widget */
		echo wp_kses_post( $args['after_widget'] );
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['page_url'] = strip_tags( $new_instance['page_url'] );
		$instance['faces'] = strip_tags( $new_instance['faces'] );
		$instance['stream'] = strip_tags( $new_instance['stream'] );
		$instance['cover'] = strip_tags( $new_instance['cover'] );

		return $instance;
	}

	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Find us on Facebook', 'cover' => 'on', 'faces' => 'on', 'page_url' => '', 'stream' => false);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title', 'hawthorn' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" style="width:96%;" />
		</p>
		
		<!-- Page url -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'page_url' )); ?>"><?php esc_html_e( 'Facebook Page URL', 'hawthorn' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'page_url' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'page_url' )); ?>" value="<?php echo esc_url($instance['page_url']); ?>" style="width:96%;" />
			<small><?php esc_html_e( 'Example. https://www.facebook.com/envato', 'hawthorn' ); ?></small>
		</p>

		<!-- Faces -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'faces' )); ?>"><?php esc_html_e( 'Show Faces', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'faces' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'faces' )); ?>" <?php checked( (bool) $instance['faces'], true ); ?> />
		</p>
		
		<!-- Stream -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'stream' )); ?>"><?php esc_html_e( 'Show Stream', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'stream' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'stream' )); ?>" <?php checked( (bool) $instance['stream'], true ); ?> />
		</p>
		
		<!-- Cover -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'cover' )); ?>"><?php esc_html_e( 'Show Page Cover Image', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'cover' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'cover' )); ?>" <?php checked( (bool) $instance['cover'], true ); ?> />
		</p>

	<?php
	}
}
}
?>