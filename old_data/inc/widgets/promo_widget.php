<?php
/**
 * Plugin Name: Promo Box Widget
 */

if(!class_exists('hawthorn_promo_widget')) {
 
add_action( 'widgets_init', 'hawthorn_promo_load_widget' );

function hawthorn_promo_load_widget() {
	register_widget( 'hawthorn_promo_widget' );
}

class hawthorn_promo_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'hawthorn_promo_widget', 'description' => esc_html__('Display a promo box with an image and link', 'hawthorn') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'hawthorn_promo_widget' );

		/* Create the widget. */
		parent::__construct( 'hawthorn_promo_widget', esc_html__('Hawthorn: Promo Box', 'hawthorn'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$image_url = $instance['image_url'];
		$heading = $instance['heading'];
		$image_link = $instance['image_link'];
		$height = $instance['height'];
		$margin = $instance['margin'];
		$newtab = $instance['newtab'];
		
		if($margin) {
			$args['before_widget'] = str_replace('<div', '<div style="margin-bottom:'. $margin .'px;" ', $before_widget);
		}
		
		/* Before widget */
		echo wp_kses_post( $args['before_widget'] );

		/* Display the widget title if one was input */
		if ( $title ) {
			echo wp_kses_post( $args['before_title'] . $title . $args['after_title'] );
		}
		?>
			
			<div class="promo-item" style="<?php if($image_url) : ?>background-image:url(<?php echo esc_url($image_url); ?>);<?php else : ?>background-color:#f4f4f4;<?php endif; ?> <?php if($height) : ?>height:<?php echo esc_html($height); ?>px;<?php else : ?>height:130px;<?php endif; ?>">
				<?php if($image_link) : ?><a <?php if($newtab) : ?>target="_blank"<?php endif; ?> class="promo-link" href="<?php echo esc_url($image_link); ?>"></a><?php endif; ?>
				<?php if($heading) : ?>
				<div class="promo-overlay">
					<h4><?php echo esc_html($heading); ?></h4>
				</div>
				<?php endif; ?>
			</div>
			
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
		$instance['image_link'] = strip_tags( $new_instance['image_link'] );
		$instance['heading'] = strip_tags( $new_instance['heading'] );
		$instance['image_url'] = strip_tags( $new_instance['image_url'] );
		$instance['height'] = strip_tags( $new_instance['height'] );
		$instance['margin'] = strip_tags( $new_instance['margin'] );
		$instance['newtab'] = strip_tags( $new_instance['newtab'] );
		

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => '', 'image_url' => '', 'image_link' => '', 'heading' => '', 'border' => false, 'height' => 130, 'margin' => 50);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title', 'hawthorn' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" style="width:96%;" />
		</p>
		
		<!-- Background URL -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'image_url' )); ?>"><?php esc_html_e( 'Background Image URL', 'hawthorn' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'image_url' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'image_url' )); ?>" value="<?php echo esc_url($instance['image_url']); ?>" style="width:96%;" />
			<small><?php esc_html_e( 'Enter the background image URL you want to use. You can upload your background image via Media > Add New', 'hawthorn' ); ?></small>
		</p>
		
		<!-- Image Text -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'heading' )); ?>"><?php esc_html_e( 'Promo Text', 'hawthorn' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'heading' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'heading' )); ?>" value="<?php echo esc_attr($instance['heading']); ?>" style="width:96%;" />
		</p>
		
		<!-- Link -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'image_link' )); ?>"><?php esc_html_e( 'Promo Link', 'hawthorn' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'image_link' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'image_link' )); ?>" value="<?php echo esc_url($instance['image_link']); ?>" style="width:96%;" />
			<small><?php esc_html_e( 'Enter a link you want the promo box to go to.', 'hawthorn' ); ?></small>
		</p>
		
		<!-- Height -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'height' )); ?>"><?php esc_html_e( 'Promo Box Height', 'hawthorn' ); ?>:</label><br>
			<input id="<?php echo esc_attr($this->get_field_id( 'height' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'height' )); ?>" value="<?php echo esc_attr($instance['height']); ?>" style="width:60%;" /> px
		</p>
		
		<!-- Margin -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'margin' )); ?>"><?php esc_html_e( 'Promo Box Margin Bottom', 'hawthorn' ); ?>:</label><br>
			<input id="<?php echo esc_attr($this->get_field_id( 'margin' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'margin' )); ?>" value="<?php echo esc_attr($instance['margin']); ?>" style="width:60%;" /> px
		</p>
		
		<!-- New tab -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'newtab' )); ?>"><?php esc_html_e( 'Open link in a new tab?', 'hawthorn' ); ?></label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'newtab' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'newtab' )); ?>" <?php checked( (bool) $instance['newtab'], true ); ?> />
		</p>
			
	<?php
	}
}
}
?>