<section class="stage_wrapper">
			<div class="container_wrapper">
				<div class="header_block_inner">
					<div class="header_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/stage_icon.png" alt="">
					</div>
					<div class="header_text_holder">
						<h3><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?></h3>
						<h4><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else { }?></h4>
					</div>
				</div>
				<div class="stages_inner">
					<div class="stage_holder">
						<div class="stage_header">
							<p>Получить консультацию</p>
						</div>
						<div class="stage_img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/stage_1.png" alt="">
						</div>
						<div class="stage_button_consultant">
							<a href="#get_kosult" class="fancybox">получить консультацию</a>
						</div>
					</div>
					<div class="stage_holder">
						<div class="stage_header">
							<p>Выбрать схему лечения</p>
						</div>
						<div class="stage_img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/stage_2.png" alt="">
						</div>
						<div class="stage_button_consultant">

						</div>
					</div>
					<div class="stage_holder">
						<div class="stage_header">
							<p>Заказать <br> лекарства</p>
						</div>
						<div class="stage_img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/stage_3.png" alt="">
						</div>
						<div class="stage_button_consultant">
							<a href="#get_product" class="fancybox">заказать лекарства</a>
						</div>
					</div>
					<div class="stage_holder">
						<div class="stage_header">
							<p>Сдать <br> анализы</p>
						</div>
						<div class="stage_img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/stage_4.png" alt="">
						</div>
						<div class="stage_button_consultant">

						</div>
					</div>
					<div class="stage_holder">
						<div class="stage_header">
							<p>Вы полность <br>здоровы</p>
						</div>
						<div class="stage_img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/stage_5.png" alt="">
						</div>
						<div class="stage_button_consultant">

						</div>
					</div>
				</div>
			</div>
		</section>