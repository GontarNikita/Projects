<?php get_header(); ?>
<div id="content">
	<section class="articles_wrapper posts_wrapper">
		<div class="container_wrapper">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div>
		</div>
		<div class="container_wrapper container_wrapper_with_sidebar">
			<div class="main_content_wrapper">
				<div class="article_wrapper post_wrapper">
					<div class="article post">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'blocks/content', get_post_type() ); ?>
							<?php comments_template(); ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
	<?php get_sidebar(); ?>
		</div>

	</section>
</div>
<?php get_footer(); ?>