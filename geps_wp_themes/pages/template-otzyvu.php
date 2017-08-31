<?php
/*
Template Name: Шаблон Страницы отзывов
*/
get_header(); ?>



				<section class="video_reviwes video_reviwes_page">
					<div class="container_wrapper">
						<div class="header_block_inner">
							<div class="header_img_holder"><img src="<?php echo get_template_directory_uri(); ?>/img/video_feedback_icon.png" alt="" /></div>
						<div class="header_text_holder">
							<h3>видеоотзывы</h3>
						</div>
					</div>
						<?php
$loop = new WP_Query(array(
	'posts_per_page' => 20,
	'post_type' => 'video_coments',
	));

if( $loop->have_posts() ){

	echo '

		<div class="slider_delivery slider_video_feedback">
			<div class="slider_wrapper slider_feedback_page">
				<div class="slider_wrapper_box">';

					$i = 0;
					$pcount = count( $loop->posts );
					while( $loop->have_posts() ){
						$loop->the_post();

						echo '
						<div class="video_reviwes_wrapper">
							'; if(have_rows('video_wrap')):
							while(have_rows('video_wrap')): the_row();
							echo '
							<div class="box_review_holder">
								<a class="fancyVideo" data-type="iframe" href="'; $value = get_sub_field( "video_type"); if( $value ) { echo $value;} echo '"><img src="'; $value = get_sub_field( "video_type"); if( $value ) { echo $value;} echo '" alt=""></a>
							</div>';
							endwhile;
							endif;
							echo
							'</div>';
							$i++;
							if( ! ($i % 10) && ($pcount != $i) )
								echo '</div><div class="slider_wrapper_box">';
						}

						echo '
					</div>
				</div>
			</div>';
	} wp_reset_postdata();
	?>

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


<section class="add_feedback">
<div class="container_wrapper">
<div class="header_block_inner">
<div class="header_img_holder"><img src="<?php echo get_template_directory_uri(); ?>/img/add_feedback_icon.png" alt="" /></div>
<div class="header_text_holder">
<h3>оставьте свой отзыв</h3>
</div>
</div>
<div class="form_add_feedback_wrapper">

 <?php echo do_shortcode( '[contact-form-7 id="244" title="Форма Отзывов видео и текстового комента"]' )?>
<div class="field_button"><input type="submit" name="" value="Отправить" class="trigger_vid_but"></div>
</div>
</div>
</section><section class="back_to_main_wrapper"><a href="<?php bloginfo('url') ?>">Вернуться на главную страницу</a></section>





<?php get_footer(); ?>