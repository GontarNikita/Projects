<?php
/*
Template Name: Шаблон Главной страница
*/
get_header(); ?>

<div id="content">


	<section class="advantages_wrapper">
		<div class="container_wrapper">
			<div class="wrapper_justify_advanteges">
				<div class="advantage_inner">
					<div class="img_advantage_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/advantage_1.png" alt="">
					</div>
					<div class="name_advantage_holder">
						Только оригинальные препараты
					</div>
					<div class="description_advantage_holder">
						Сертификаты соответствия отправляются <br> с каждой посылкой
					</div>
				</div>
				<div class="advantage_inner">
					<div class="img_advantage_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/advantage_2.png" alt="">
					</div>
					<div class="name_advantage_holder">
						Оплата по факту получения
					</div>
					<div class="description_advantage_holder">
						Вы ничем не рискуете
					</div>
				</div>
				<div class="advantage_inner">
					<div class="img_advantage_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/advantage_3.png" alt="">
					</div>
					<div class="name_advantage_holder">
						Вылечиваемость до 100%
					</div>
					<div class="description_advantage_holder">
						Мы гарантируем полное <br> выздоровление
					</div>
				</div>
				<div class="advantage_inner">
					<div class="img_advantage_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/advantage_4.png" alt="">
					</div>
					<div class="name_advantage_holder">
						Анонимность
					</div>
					<div class="description_advantage_holder">
						Только вы знаете что в посылке
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="article_wrapper product_archive products">
		<?php
		$loop = new WP_Query(array(
			'posts_per_page' => 50,
			'post_type' => 'product',
			)); ?>
			<?php if ($loop->have_posts()) { ?>
			<section class="products_wrapper" id="product">
				<div class="container_wrapper">
					<div class="article_wrapper product_archive products">
						<div class="header_block_inner">
							<div class="header_img_holder">
								<img src="<?php echo get_template_directory_uri(); ?>/img/sale_icon.png" alt="">
							</div>
							<div class="header_text_holder">
								<h3>купить софосбувир дешевле на 30 % в России</h3>
								<h4>софосбувир из Индии без посредников с доставкой по России от 3 дней</h4>
							</div>
						</div>
						<div class="products_inner">
							<?php while ($loop->have_posts()) { $loop->the_post(); ?>
							<div class="product_holder home_page">
								<div class="header_product">
									<?php the_title( '<h3>', '</h3>' );?>
									<p>(<?php the_field('header_span');?>)</p>
								</div>
								<?php get_template_part( 'blocks/product/content', get_post_type() ); ?>
							</div>
							<?php } ?>
						</div>
					<!--	<div class="product_get_all"><a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Смотреть все Продукты</a></div> -->
					</div><!-- .home-questions__list -->
				</div>
			</section>
			<?php } wp_reset_postdata(); ?>
		</div>

			<?php if(have_rows('rows')):
			while ( have_rows('rows') ) : the_row();
			if( get_row_layout() == 'galaery_sertificates_wrap' ):
				get_template_part('blocks/home/sertificates');
			elseif( get_row_layout() == 'galaery_not_oroginal_wrap' ):
				get_template_part('blocks/home/difrensec');
			elseif( get_row_layout() == 'profeshional_say' ):
				get_template_part('blocks/home/talk_about');
			elseif( get_row_layout() == 'stage_how' ):
				get_template_part('blocks/home/stage_how');
			elseif( get_row_layout() == 'schema_treatment' ):
				get_template_part('blocks/home/shema');
			elseif( get_row_layout() == 'delivery_block' ):
				get_template_part('blocks/home/delivery');
			elseif( get_row_layout() == 'slider_delivery' ):
				get_template_part('blocks/home/slider_delivery');
			elseif( get_row_layout() == 'review_video' ):
				get_template_part('blocks/home/video_reviews');
			elseif( get_row_layout() == 'text_reviews' ):
				get_template_part('blocks/home/recomend_revies');
			endif;
			endwhile;
			endif; ?>
		</main>

	</div>

	<?php get_footer(); ?>