<section class="certificates_wrapper" id="certificates">
			<div class="container_wrapper">
				<div class="header_block_inner">
					<div class="header_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/certification_icon.png" alt="">
					</div>
					<div class="header_text_holder">
							<h3><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?></h3>
							<h4><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else { }?></h4>
					</div>
				</div>
				<div class="certificates_slider_wrap">
				<?php if(have_rows('galaery_sertificates')): ?>
					<ul class="certificates_slider">
						<?php while(have_rows('galaery_sertificates')): the_row(); ?>
								<li class="certificates_slider_item ">
									<?php	$image = get_sub_field('img_sertificates');
									echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';?>
									<a href="<?php echo $image['url']; ?>" class="certificate_hover" data-fancybox="gallery_rooms"></a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				</div>
			</div>
		</section>

