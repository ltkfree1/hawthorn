<?php
/**
 * Plugin Name: Social Widget
 */

if(!class_exists('hawthorn_social_widget')) {
 
add_action( 'widgets_init', 'hawthorn_social_load_widget' );

function hawthorn_social_load_widget() {
	register_widget( 'hawthorn_social_widget' );
}

class hawthorn_social_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'hawthorn_social_widget', 'description' => esc_html__('A widget that displays your social icons', 'hawthorn') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'hawthorn_social_widget' );

		/* Create the widget. */
		parent::__construct( 'hawthorn_social_widget', esc_html__('Hawthorn: Social Icons', 'hawthorn'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$facebook = $instance['facebook'];
		$twitter = $instance['twitter'];
		$instagram = $instance['instagram'];
		$bloglovin = $instance['bloglovin'];
		$youtube = $instance['youtube'];
		$tumblr = $instance['tumblr'];
		$pinterest = $instance['pinterest'];
		$dribbble = $instance['dribbble'];
		$soundcloud = $instance['soundcloud'];
		$vimeo = $instance['vimeo'];
		$linkedin = $instance['linkedin'];
		$snapchat = $instance['snapchat'];
		$rss = $instance['rss'];
		$email = $instance['email'];
		
		/* Before widget */
		echo wp_kses_post( $args['before_widget'] );

		/* Display the widget title if one was input */
		if ( $title ) {
			echo wp_kses_post( $args['before_title'] . $title . $args['after_title'] );
		}
		
		?>
		
			<div class="social-widget">
				<?php if($facebook) : ?><a href="https://facebook.com/<?php echo esc_html(get_theme_mod('hawthorn_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
				<?php if($twitter) : ?><a href="https://twitter.com/<?php echo esc_html(get_theme_mod('hawthorn_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
				<?php if($instagram) : ?><a href="https://instagram.com/<?php echo esc_html(get_theme_mod('hawthorn_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
				<?php if($pinterest) : ?><a href="https://pinterest.com/<?php echo esc_html(get_theme_mod('hawthorn_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
				<?php if($bloglovin) : ?><a href="https://bloglovin.com/<?php echo esc_html(get_theme_mod('hawthorn_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
				<?php if($tumblr) : ?><a href="https://<?php echo esc_html(get_theme_mod('hawthorn_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
				<?php if($youtube) : ?><a href="https://youtube.com/<?php echo esc_html(get_theme_mod('hawthorn_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
				<?php if($dribbble) : ?><a href="https://dribbble.com/<?php echo esc_html(get_theme_mod('hawthorn_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
				<?php if($soundcloud) : ?><a href="https://soundcloud.com/<?php echo esc_html(get_theme_mod('hawthorn_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
				<?php if($vimeo) : ?><a href="https://vimeo.com/<?php echo esc_html(get_theme_mod('hawthorn_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
				<?php if($linkedin) : ?><a href="<?php echo esc_url(get_theme_mod('hawthorn_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
				<?php if($snapchat) : ?><a href="https://snapchat.com/add/<?php echo esc_html(get_theme_mod('hawthorn_snapchat')); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i></a><?php endif; ?>
				<?php if($email) : ?><a href="mailto:<?php echo esc_url(get_theme_mod('hawthorn_email')); ?>"><i class="fa fa-envelope-o"></i></a><?php endif; ?>
				<?php if($rss) : ?><a href="<?php echo esc_url(get_theme_mod('hawthorn_rss')); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
			</div>
			
			
		<?php

		/* After widget (defined by themes). */
		echo wp_kses_post( $args['after_widget'] );
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['bloglovin'] = strip_tags( $new_instance['bloglovin'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		$instance['tumblr'] = strip_tags( $new_instance['tumblr'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );
		$instance['dribbble'] = strip_tags( $new_instance['dribbble'] );
		$instance['soundcloud'] = strip_tags( $new_instance['soundcloud'] );
		$instance['vimeo'] = strip_tags( $new_instance['vimeo'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['snapchat'] = strip_tags( $new_instance['snapchat'] );
		$instance['rss'] = strip_tags( $new_instance['rss'] );
		$instance['email'] = strip_tags( $new_instance['email'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Subscribe & Follow', 'facebook' => 'on', 'twitter' => 'on', 'instagram' => 'on', );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title', 'hawthorn' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" style="width:90%;" />
		</p>
		
		<p><?php esc_html_e( 'Note: Set your social links in the Customizer', 'hawthorn' ); ?></p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'facebook' )); ?>"><?php esc_html_e( 'Show Facebook', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'facebook' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'facebook' )); ?>" <?php checked( (bool) $instance['facebook'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'twitter' )); ?>"><?php esc_html_e( 'Show Twitter', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'twitter' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'twitter' )); ?>" <?php checked( (bool) $instance['twitter'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'instagram' )); ?>"><?php esc_html_e( 'Show Instagram', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'instagram' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'instagram' )); ?>" <?php checked( (bool) $instance['instagram'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'pinterest' )); ?>"><?php esc_html_e( 'Show Pinterest', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'pinterest' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'pinterest' )); ?>" <?php checked( (bool) $instance['pinterest'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'bloglovin' )); ?>"><?php esc_html_e( 'Show Bloglovin', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'bloglovin' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'bloglovin' )); ?>" <?php checked( (bool) $instance['bloglovin'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'tumblr' )); ?>"><?php esc_html_e( 'Show Tumblr', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'tumblr' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'tumblr' )); ?>" <?php checked( (bool) $instance['tumblr'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'youtube' )); ?>"><?php esc_html_e( 'Show Youtube', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'youtube' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'youtube' )); ?>" <?php checked( (bool) $instance['youtube'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'dribbble' )); ?>"><?php esc_html_e( 'Show Dribbble', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'dribbble' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'dribbble' )); ?>" <?php checked( (bool) $instance['dribbble'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'soundcloud' )); ?>"><?php esc_html_e( 'Show Soundcloud', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'soundcloud' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'soundcloud' )); ?>" <?php checked( (bool) $instance['soundcloud'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'vimeo' )); ?>"><?php esc_html_e( 'Show Vimeo', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'vimeo' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'vimeo' )); ?>" <?php checked( (bool) $instance['vimeo'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'linkedin' )); ?>"><?php esc_html_e( 'Show Linkedin', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'linkedin' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'linkedin' )); ?>" <?php checked( (bool) $instance['linkedin'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'snapchat' )); ?>"><?php esc_html_e( 'Show Snapchat', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'snapchat' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'snapchat' )); ?>" <?php checked( (bool) $instance['snapchat'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'email' )); ?>"><?php esc_html_e( 'Show Email', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'email' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'email' )); ?>" <?php checked( (bool) $instance['email'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'rss' )); ?>"><?php esc_html_e( 'Show RSS', 'hawthorn' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'rss' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'rss' )); ?>" <?php checked( (bool) $instance['rss'], true ); ?> />
		</p>

	<?php
	}
}
}
?>