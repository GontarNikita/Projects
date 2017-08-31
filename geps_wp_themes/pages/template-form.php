<?php
/*
Template Name: Шаблон Страницы отправки формы
*/
get_header(); ?>



<section class="gratitude_wrapper">
			<div class="container_wrapper">
				<div class="gratitude_inner">
					<div class="gratitude_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/gratitude_doctor.png" alt="">
					</div>
					<div class="gratitude_text_holder">
						<h3>Спасибо за Ваше доверие</h3>
						<p>В ТЕЧЕНИИ <span>5 МИНУТ</span> ВАМ ПОЗВОНИТ НАШ СПЕЦИАЛИСТ И ПРОКОНСУЛЬТИРУЕТ ВАС ПО ВСЕМ ИНТЕРЕСУЮЩИМ ВАМ ВОПРОСАМ</p>
					</div>
				</div>
            </div>
            <div class="error_page_wrapper">
            <div class="back_to_main" style="padding-bottom: 20px;">
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





<?php get_footer(); ?>