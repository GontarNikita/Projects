<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="product_inner">
		<?php if ( is_single() ) : ?>
			<div class="tovar_slider">
				<?php if(have_rows('galery_product')): ?>
					<ul class="tovar_sldier_wrapper" id="slider_vertical">
						<?php while(have_rows('galery_product')): the_row(); ?>
							<?php $image = get_sub_field('img_product'); ?>
							<li data-thumb="<?php echo $image['url']; ?>">
								<?php echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';?>
							</li>
						<?php endwhile; ?>
					</ul>
					<div class="buts_wrap">
						<div class="buts_inner top"><a class="but_next"></a></div>
						<div class="buts_inner bottom"><a class="but_prev"></a></div>
					</div>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<div class="company_logo">
				<img src="" alt="">
				<?php $image = get_field('logo_company_product'); if( !empty($image) ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="header_product single_title">
			<?php the_title( '<h3>', '</h3>' );?>
			<p>(<?php the_field('header_span');?>)</p>
		</div>
		<div class="img_product">
			<a href="<?php echo get_permalink(); ?>">
        <?php  echo get_the_post_thumbnail( $page->ID, 'medium'); ?>
			</a>
		</div>
		<!--форма товара-->
		<div class="hidden">

			<div class="callback get_buy_product" id="get_buy_product_<?php echo get_the_ID();?>">
				<div class="callback_title">
					<?php the_title( '<h3>', '</h3>' );?>
			<p>(<?php the_field('header_span');?>)</p>
				</div>
				<div class="callback_form_wrapper order_form_wrapper">
					<div class="callback_form_img">
            <?php  echo get_the_post_thumbnail( $page->ID, 'medium'); ?>
					</div>
          <?php echo do_shortcode( '[contact-form-7 id="89" title="Форма товара Pop_up"]' ); ?>
				</div>
				<div class="info_box">
					<?php theme_the_excerpt(); ?>
				</div>
				<div class="submit_but"><input class="dop_trigger_but" type="submit" value="Оформить заказ"></div>
			</div>
		</div>
	<?php endif; ?>
	<?php if ( is_single() ) : ?>
		<div class="order_holder">
			<div class="order_title">
				<?php if ( is_single() ) : ?>
					<?php  the_title( '<h2>', '</h2>'); ?>
					<span>(<?php the_field('header_span');?>)</span>
				<?php else: ?>
					<?php the_title( '<h3>', '</h3>' );?>
					<span>(<?php the_field('header_span');?>)</span>
				<?php endif; ?>
			</div>
			<div class="price_product">
				<div class="price price_receipt">
					<div class="receipt_radio">
						<input class="radio_b" id="radio" type="radio" name="radio" value="<?php the_field('cost_polycheniye'); ?>">
						<label for="radio">При получении</label>
					</div>
					<p>Стоимость: <span class="count_price"> <?php the_field('cost_polycheniye'); ?> р.</span></p>
				</div>
				<div class="price price_prepayment">
					<div class="prepayment_radio">
						<input id="radio1" type="radio" class="radio_b" name="radio" value="<?php the_field('cost_predoplata'); ?>">
						<label for="radio1">Предоплата</label>
					</div>
					<p>Стоимость: <span class="count_price"> <?php the_field('cost_predoplata'); ?> р.</span></p>
				</div>
			</div>
			<?php echo do_shortcode( '[contact-form-7 id="141" title="Форма заказа товара"] ' )?>
		</div>
	<?php else: ?>

	<?php endif; ?>
</div>
<div class="product_description">
	<?php if ( is_single() ) : ?>
		<?php  the_content();?>
	<?php    else:?>
		<div class="description_product">
			<div class="characteristics">
				<div class="characteristic_text">
					<p>Торговая марка: <?php the_field('trade_mark'); ?></p>
					<p>Фирменное название: <?php the_field('firm_name'); ?></p>
					<p>Производитель: <?php the_field('production_product'); ?></p>
					<p>Состав: <?php the_field('sostav'); ?></p>
					<a>
						<span><?php the_field('cost_polycheniye'); ?> р.</span>
						<p>(при получении)</p>
					</a>
					<a>
						<span><?php the_field('cost_predoplata'); ?> р.</span>
						<p>(по предоплате)</p>
					</a>
				</div>
				<div class="button_buy">
					<a href="#get_buy_product_<?php echo get_the_ID();?>" class="fancybox">Заказать</a>
				</div>
			</div>
		</div>
	<?php  endif; ?>
</div>
<?php wp_link_pages(); ?>

</div>