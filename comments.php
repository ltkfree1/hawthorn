<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="sp-col-12">
<div class="post-comments" id="comments">
	
	<?php 
		if ( comments_open() ) :
		echo '<h4 class="block-heading">';
		comments_number(esc_html__('No Comments','hawthorn'), esc_html__('1 Comment','hawthorn'), '% ' . esc_html__('Comments','hawthorn') );
		echo '</h4>';
		endif;

		echo "<div class='comments'><ul>";
		
			wp_list_comments(array(
				'avatar_size'	=> 60,
				'style'			=> 'ul',
				'callback'		=> 'hawthorn_comments',
				'type'			=> 'all'
			));

		echo "</ul></div>";

		echo "<div id='comments_pagination'>";
			paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
		echo "</div>";

		$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout
		$aria_req = '';
		$sp_fields =  array(

		  'author' =>
			'<p class="comment-form-author"><input id="author" placeholder="'. esc_html__('Name', 'hawthorn') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' /></p>',

		  'email' =>
			'<p class="comment-form-email"><input id="email" placeholder="'. esc_html__('Email', 'hawthorn') .'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' /></p>',

		  'url' =>
			'<p class="comment-form-url"><input id="url" placeholder="'. esc_html__('Website', 'hawthorn') .'" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" /></p>',
			
		  'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
            '<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'hawthorn' ) . '</label></p>',
			
		);
		
		comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> esc_html__('Leave a Reply', 'hawthorn'),
			'cancel_reply_link'		=> esc_html__('Cancel Reply', 'hawthorn'),
			'label_submit'			=> esc_html__('Post Comment', 'hawthorn'),
			'fields' => $sp_fields,
		));
	 ?>

</div>
</div> <!-- end comments div -->