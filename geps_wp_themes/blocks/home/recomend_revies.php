

<section class="recomend" id="recomend">
	<?php
		$loop = new WP_Query(array(
			'posts_per_page' => 50,
			'post_type' => 'text_coment',
			)); ?>
			<?php if ($loop->have_posts()) { ?>
			<section class="recomend recomend_page">
<div class="container_wrapper">
<div class="header_block_inner">
<div class="header_img_holder"><img src="<?php echo get_template_directory_uri(); ?>/img/feedback_icon.png" alt="" /></div>
<div class="header_text_holder">
<h3>отзывы</h3>
</div>
</div>
						<div class="slider_wrapper_recomend_page">
	<div class="slider_recomend_page ">


	<div class="recomend_wrapper">
								<?php while ($loop->have_posts()) { $loop->the_post(); ?>
							<div class="box_holder">
								<div class="box_holder_title">
								<?php the_title( '<h4>', '</h4>' );?>
								</div>
								<?php theme_the_excerpt(); ?>
							<div class="but_get_more"><a class="box_holder_hide" href="#box_holder_view">ЧИТАТЬ ПОЛНОСТЬЮ</a></div>

                                <div class="box_holder box_holder_popup" id="box_holder_view ">
								<div class="box_holder_title">
									<?php the_title( '<h4>', '</h4>' );?>
								</div>
								<?php the_content(); ?>
								<div class="box_holder_title box_holder_title_files">
									<h4>Прикрепленные файлы </h4>
								</div>
								<div class="box_holder_files">
									<?php if(have_rows('attached_imgs')): ?>
									<?php while(have_rows('attached_imgs')): the_row(); ?>
										<?php	$image = get_sub_field('attached_img');
										echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';?>
									<?php endwhile; ?>
								<?php endif; ?>
								</div>
							</div>


                            </div>
							<?php } ?>
						</div>
					<!--	<div class="product_get_all"><a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Смотреть все Продукты</a></div> -->
					</div><!-- .home-questions__list -->
				</div>
			</section>
			<?php } wp_reset_postdata(); ?>
<div class="buts_recomends">
			<div class="but_rec"><a href="#get_review" class="fancybox">ОСТАВИТЬ ОТЗЫВ</a></div>
		</div>
</section>