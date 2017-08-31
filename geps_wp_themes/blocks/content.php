

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="article_date post_date">
		<a href="<?php echo get_date_archive_link() ?>" rel="bookmark">
			<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
				<?php the_time( 'd.m.y' ) ?>
			</time>
		</a>
	</div>
	<div class="article_content post_header">
		<?php if ( is_single() ) :
		the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</div>
	<div class="post_content">
		<?php the_post_thumbnail( 'full' ); ?>
		<?php if ( is_single() ) :
		the_content();
		else:
			theme_the_excerpt();
		endif; ?>
	</div>
	<?php wp_link_pages(); ?>
	<div class="meta">
		<ul>

			<li></li>
			<?php edit_post_link( __( 'Edit', 'base' ), '<li>', '</li>' ); ?>
		</ul>
		<div class="post_tags">
			<div class="post_tag">
				<ul>
					<?php the_tags( __( '<li>Теги: ', 'base' ), ', ', '</li>' ); ?>
				</ul>
			</div>
		</div>
		<div class="article_count_comments">
								<p>Комментариев :  <span class="count_comments"><?php comments_number(''); ?></span></p>
							</div>
	</div>
</div>