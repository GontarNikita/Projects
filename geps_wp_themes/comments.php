<?php

// Do not delete these lines
if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
	die ( 'Please do not load this page directly. Thanks!' );

if ( post_password_required() ) {
	?> <p><?php _e( 'This post is password protected. Enter the password to view comments.', 'base' ); ?></p> <?php
	return;
}

function theme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>

	<div class="commentlist-item">
		<div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<div class="commentlist-holder">
				<?php edit_comment_link( __( '(Изменить)', 'base' ), '<p class="edit-link">', '</p>' ); ?>
				<div class="name_and_date">
					<p class="meta"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php comment_date( 'd.m.y' ); ?></a></p>
					<p><?php comment_author_link(); ?></p>
				</div>
				<?php if ( $comment->comment_approved == '0' ) : ?>
				<p><?php _e( 'Ваш коментарий ожидает модерации.', 'base' ); ?></p>
				<?php else : ?>
				<div class="post_comment_content">
						<?php comment_text(); ?>
					</div>
				<?php endif; ?>

			<div class="post_comment_answer">
					<?php
				comment_reply_link( array_merge( $args, array(
					'reply_text' => __( 'Ответить', 'base' ),
					'before'     => '<p>',
					'after'      => '</p>',
					'depth'      => $depth,
					'max_depth'  => $args['max_depth'],
				) ) ); ?>

				</div>
			</div>
		</div>
	<?php }

	function theme_comment_end() { ?>
		</div>
	<?php }
?>

<?php if ( have_comments() ) : ?>
<div class="post_comments">
	<div class="section comments" id="comments">
		<div class="post_comments_title">Комментарии:</div>
		<div class="commentlist">
			<?php wp_list_comments( array(
				'callback'     => 'theme_comment',
				'end-callback' => 'theme_comment_end',
				'style'        => 'div',
			) ); ?>
		</div>
		<?php if( $comments_links = paginate_comments_links( array( 'echo' => false ) ) ): ?>
		<div class="navigation-comments">
			<?php echo $comments_links; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>

<?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) { ?>
		<p><?php printf( 'Вам нужно <a href="%s">войти</a>, чтобы оставить комментарий.', wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ); ?></p>
		<?php do_action( 'comment_form_must_log_in_after' ); ?>
	<?php } else { ?>
		<div class="add_post_comment_title">Оставить комментарий: </div>
		<form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" class="comment-form">
			<?php do_action( 'comment_form_top' ); ?>

		<?php if ( is_user_logged_in() ) { ?>

			<p><?php printf( __( 'Вы вошли как <a href="%1$s">%2$s</a>. <a href="%3$s" title="Выйти из этой учётной записи">Выйти &raquo;</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ); ?></p>
			<?php do_action( 'comment_form_logged_in_after' ); ?>

		<?php } else { ?>
			<?php do_action( 'comment_form_before_fields' ); ?>

			<div class="form-row">
				<div class="form-row__field"><input type="text" name="author" placeholder="Ваше имя" value="<?php echo $comment_author; ?>" class="form__field  comment-form__field  comment-form__author"<?php if ($req) echo ' required'; ?> /></div>
				<div class="form-row__field"><input type="email" name="email" placeholder="Ваш E-Mail" value="<?php echo $comment_author_email; ?>" class="form__field  comment-form__field  comment-form__email"<?php if ($req) echo ' required'; ?> /></div>
			</div><!-- .form-row -->

			<?php do_action( 'comment_form_after_fields' ); ?>
		<?php } ?>
			<div class="textarea_holder">
			<textarea name="comment" id="comment" placeholder="Текст" class="form__field  comment-form__field  comment-form__comment" required></textarea>
			</div>
			<?php do_action( 'comment_form' ); ?>
			<div class="button_holder">
			<input name="submit" type="submit" value="<?php if (in_category($companies)) { ?>Добавить отзыв<?php } else { ?>Отправить<?php } ?>" class="comment-form__button  form__button" />
			</div>
			<?php comment_id_fields(); ?>
		</form>

	<?php } ?>

