<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package slresponsive 
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="row">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="twelve columns">
			<?php printf( _n( '1 comment', '%s comments', get_comments_number(), 'slresponsive' ), number_format_i18n( get_comments_number() ) ); ?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'slresponsive' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'slresponsive' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'slresponsive' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list twelve columns">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 64 
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'slresponsive' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'slresponsive' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'slresponsive' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'slresponsive' ); ?></p>
	<?php endif; ?>

		<?php 
$args = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'title_reply'       => __( 'Leave a Reply', 'slresponsive' ),
  'title_reply_to'    => __( 'Leave a Reply to %s', 'slresponsive' ),
  'cancel_reply_link' => __( 'Cancel Reply', 'slresponsive' ),
  'label_submit'      => __( 'Post Comment', 'slresponsive' ),

  'comment_field' =>  '<div class="field"><label>' . _x( 'Comment', 'slresponsive' ) .
    '</label><textarea id="comment" class="input textarea" name="comment" cols="30" rows="3" aria-required="true">' .
    '</textarea></div>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'You must be <a href="%s">logged in</a> to post a comment.',  'slresponsive' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'slresponsive' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',
	
	'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<div class="inline-field field">' .
      '<label>' . __( 'Name', 'slresponsive' ) . ( $req ? '<span class="required">*</span>' : '' ) .'</label> ' .
	  '<input id="author" class="input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . 
      '" size="30" /></div>',

    'email' =>
      '<div class="inline-field field"><label>' . __( 'Email', 'slresponsive' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' . 
	  '<input id="email" name="email" class="input" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"/></div>',
    )
  ),
 );
?>
<div class="twelve columns">
	<?php comment_form( $args ); ?>
</div>
</div>

