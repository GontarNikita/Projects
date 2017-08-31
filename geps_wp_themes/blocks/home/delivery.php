	<section class="delivery" id="delivery">
			<div class="container_wrapper">
				<div class="header_block_inner">
					<div class="header_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/delivery_icon.png" alt="">
					</div>
					<div class="header_text_holder">
						<h3><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?></h3>
						<h4><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else { }?></h4>
					</div>
				</div>
				<div class="wrapper_delivery">
					<div class="logo_delivery_loc">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo_delivery_loc.png" alt="">
					</div>
					<div class="adv_wrapper_holder">
						<div class="advantages_del">
							<div class="img_holder_del"><img src="<?php echo get_template_directory_uri(); ?>/img/warhouse_icon.png" alt=""></div>
							<p>Отправка заказов производится с нашего склада в городе <strong>Тамбов</strong> </p>
						</div>
						<div class="advantages_del">
							<div class="img_holder_del"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile_icon.png" alt=""></div>
							<p>После отправки вы получаете смс сообщение с трек номером посылки</p>
						</div>
						<div class="advantages_del">
							<div class="img_holder_del"><img src="<?php echo get_template_directory_uri(); ?>/img/box_icon.png" alt=""></div>
							<p>Что бы узнать местонахождение вашего заказа введите трек номер на официальном сайте ПОЧТЫ РОССИИ</p>
						</div>
					</div>
					<div class="del_ett_block">
						<div class="icon_holder"><img src="<?php echo get_template_directory_uri(); ?>/img/ett_icon.png" alt=""></div>
						<div class="text_ett_block">
							<h4>При заказе препаратов доставкой службой EMS ПОЧТА РОССИИ наложенным платежом,<br> компания Гепс-РУ оплачивает стоимость
								доставки самостоятельно.</h4>
							<p>Дополнительно получатель оплачивает только 1,5 % + 280 рублей от стоимости заказа - за перевод денежных средств отправителю,<br>								только после того как вскроет и проверит свой заказ по описи в почтовом отделении или при курьерской доставкой на
								дом.
							</p>
						</div>
					</div>
				</div>
				<div class="buts_recomends">
					<div class="but_rec"><a href="#get_delivery" class="fancybox">ЗАКАЗАТЬ ДОСТАВКУ</a></div>
				</div>
			</div>
		</section>
