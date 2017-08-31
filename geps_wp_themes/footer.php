	<footer>
		<div class="container_wrapper">
			<ul class="footer_inner">
				<li>
					<div class="icon_holder">
						<span class="icon_footer"></span>
						<p>Телефон</p>
					</div>
					<div class="text_holder">
						<a href="tel:<?php the_field('phone_left_side', 'options')?>"><?php the_field('phone_left_side', 'options')?></a>
						<p>(бесплатно по РФ)</p>
					</div>
				</li>
				<li>
					<div class="icon_holder">
						<span class="icon_footer"></span>
						<p>Почта</p>
					</div>
					<div class="text_holder">
						<a href="mailto:<?php the_field('mail_footer', 'options')?>"><?php the_field('mail_footer', 'options')?></a>
					</div>
				</li>
				<li>
					<div class="icon_holder">
						<span class="icon_footer"></span>
						<p>Адрес</p>
					</div>
					<div class="text_holder">
						<p><?php the_field('adress_footer', 'options')?></p>
					</div>
				</li>
				<li>
					<div class="icon_holder">
						<span class="icon_footer"></span>
						<p>Данные</p>
					</div>
					<div class="text_holder">
						<p>ИНН <?php the_field('inn_footer', 'options')?><br> ОГРН <?php the_field('ogrn_footer', 'options')?></p>
					</div>
				</li>
				<li>
					<div class="icon_holder">
						<span class="icon_footer"></span>
						<p>Visa</p>
					</div>
					<div class="text_holder">
						<p>Сбербанк Россия (Visa) <?php the_field('payment_footer', 'options')?></p>
					</div>
				</li>
				<li>
					<div class="icon_holder">
						<span class="icon_footer"></span>
						<p>Доставка</p>
					</div>
					<div class="text_holder">
						<p><?php the_field('delivery_footer', 'options')?></p>
					</div>
				</li>
			</ul>

			<div class="copyright">
				<p>Gepcru.ru 2017 все права защищены</p>
			</div>
		</div>
		<div class="hidden">

			<div class="callback" id="calback_form">
				<div class="callback_title">
					<h3>Заказать обратный звонок</h3>
				</div>
				<div class="callback_form_wrapper">
					<div class="callback_form_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/popup_img.png" alt="">
					</div>
					<?php echo do_shortcode( '[contact-form-7 id="82" title="Заказать обратный звонок"]' ); ?>
				</div>
			</div>
			<div class="callback" id="get_kosult">
				<div class="callback_title">
					<h3>получите бесплатную консультацию</h3>
				</div>
				<div class="callback_form_wrapper">
					<div class="callback_form_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/popup_img.png" alt="">
					</div>
					<?php echo do_shortcode( '[contact-form-7 id="85" title="Получить консультацию"]' ); ?>
				</div>
			</div>
			<div class="callback" id="get_shema_lech">
				<div class="callback_title">
					<h3>Заказать схему лечения</h3>
				</div>
				<div class="callback_form_wrapper">
					<div class="callback_form_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/popup_img.png" alt="">
					</div>
					<?php echo do_shortcode( '[contact-form-7 id="83" title="Заказать схему Лечения"]' ); ?>
				</div>
			</div>
			<div class="callback" id="get_delivery">
				<div class="callback_title">
					<h3>Заказать доставку</h3>
				</div>
				<div class="callback_form_wrapper">
					<div class="callback_form_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/popup_img.png" alt="">
					</div>
					<?php echo do_shortcode( '[contact-form-7 id="80" title="Заказать доставку"]' ); ?>
				</div>
			</div>
			<div class="callback" id="get_review">
				<?php echo do_shortcode( '[contact-form-7 id="115" title="Оставить Отзыв"]' ); ?>
			</div>
			<div class="callback" id="get_product">
			<div class="callback_title">
					<h3>Заказать лекарства</h3>
				</div>
				<div class="callback_form_wrapper">
					<div class="callback_form_img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/popup_img.png" alt="">
					</div>
					<?php echo do_shortcode( '[contact-form-7 id="81" title="Заказать лекарства"]' ); ?>
				</div>

			</div>
			<div class="form_wrapper" id="get_gift">
						<div class="form_text">
							<p>Оставьте заявку <span class="form_text_extra">и получите комплекс витаминов</span> <span class="form_text_gift"> в подарок</span></p>
						</div>
						<div class="form_order">
							<?php echo do_shortcode( '[contact-form-7 id="88" title="Форма получить подарок"]' ); ?>
						</div>

					</div>

		</div>

		<div class="hide_forms" style="display:none;">

		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>









