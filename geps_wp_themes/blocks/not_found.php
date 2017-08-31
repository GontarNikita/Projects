<section class="gratitude_wrapper error_page_wrapper">
			<div class="container_wrapper">
				<div class="error_header">
					<h1><?php _e( 'Ошибка', 'base' ); ?></h1>
				</div>
				<div class="gratitude_inner error_inner">
					<div class="gratitude_img_holder error_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="">
					</div>
					<div class="gratitude_text_holder error_text_holder">
						<h3>Страница не существует или была удалена</h3>
						<p>Проверьте правильность ввода адреса или вернитесь на главную страницу сайта</p>
					</div>
				</div>
				<div class="back_to_main">
					<a href="<?php bloginfo('url') ?>/" class="logo_wrapper">Вернуться на главную</a>
				</div>
			</div>
		</section>
		<section class="social_wrapper">
			<div class="container_wrapper">
				<div class="header_block_inner">
					<div class="header_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/social_header_icon.png" alt="">
					</div>
					<div class="header_text_holder">
						<h3>Подпишитесь на нас в социальных сетях</h3>
						<h4>вступайте в наши группы вконтакте и одноклассниках</h4>
					</div>
				</div>
				<div class="social_inner">
					<div class="vk_holder">
						<?php the_field('widget_vk', 'options')?>
					</div>
					<div class="ok_holder">
						<?php the_field('widget_ok', 'options')?>
					</div>
				</div>
			</div>
		</section>