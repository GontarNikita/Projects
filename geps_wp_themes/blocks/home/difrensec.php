	<section class="differences_wrapper" id="differences">
		<div class="container_wrapper">
			<div class="header_block_inner">
				<div class="header_img_holder">
					<img src="<?php echo get_template_directory_uri(); ?>/img/original.png" alt="">
				</div>
				<div class="header_text_holder">
					<h3><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?></h3>
					<h4><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else { }?></h4>
				</div>
			</div>
				<?php if(have_rows('galaery_not_oroginal')): ?>
					<ul class="differences_slider">
						<?php while(have_rows('galaery_not_oroginal')): the_row(); ?>
							<li class="differences_slider_items ">
								<div class="differences_slider_item">
									<?php	$image = get_sub_field('img_original');	echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';?>
									<div class="differences_slider_desc_top">
										<div class="circle">
											<img src="<?php echo get_template_directory_uri(); ?>/img/folga.png" alt="">
										</div>
										<div class="circle_text">Герметичная фольга на крышке</div>
									</div>
									<div class="differences_slider_desc_bottom">
										<div class="circle"></div>
										<div class="circle_text">ГОЛОГРАММА НА УПАКОВКЕ ПЕРЕЛИВАЕТСЯ С НАЗВАНИЕМ</div>
									</div>
								</div>
								<div class="differences_slider_item">
								<?php	$image = get_sub_field('img_original_second'); echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';?>
									<div class="differences_slider_desc_top_2">
										<div class="circle"></div>
										<div class="circle_text">НОМЕР СЕРИИ ДОЛЖЕН БЫТЬ ОДИНАКОВЫМ КАК НА УПАКОВКЕ ТАК И НА САМОЙ БАНКЕ</div>
									</div>
									<div class="differences_slider_desc_bottom_2">
										<div class="circle"></div>
										<div class="circle_text">ШТРИХ - КОД НА БАНКЕ (ТОЛЬКО ДЛЯ ПРОИЗВЕДЕННЫХ НА ЗАВОДЕ GERMAN REMEDIES LTD)</div>
									</div>
								</div>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
