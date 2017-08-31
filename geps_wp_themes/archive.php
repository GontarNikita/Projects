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
				<?php if ( have_posts() ) : ?>
					<div class="header_block_inner">
						<div class="header_img_holder">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.png" alt="">
						</div>
						<div class="header_text_holder">
							<?php the_archive_title( '<h3>', '</h3>' ); ?>
							<h4>О ПРЕПАРАТАХ ОТ ГЕПАТИТА «С» СОФОСБУВИР, ДАКЛАТАСВИР, ЛЕДИПАСВИР</h4>
						</div>
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
	</div>

</section>
<?php get_footer(); ?>