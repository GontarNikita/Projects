<?php get_header(); ?>
<div id="content">
	<section class="articles_wrapper posts_wrapper">
		<div class="container_wrapper container_wrapper_with_sidebar">
			<div class="main_content_wrapper">
				<?php if ( have_posts() ) : ?>
					<div class="title">
						<h1><?php printf( __( 'Результаты поиска: %s', 'base' ), '<span>' . get_search_query() . '</span>'); ?></h1>
					</div>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'blocks/content', get_post_type() ); ?>
					<?php endwhile; ?>
					<?php get_template_part( 'blocks/pager' ); ?>
				<?php else : ?>
					<?php get_template_part( 'blocks/not_found' ); ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>