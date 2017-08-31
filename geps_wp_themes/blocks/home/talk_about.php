<section class="talk_about_wrapper">
			<div class="container_wrapper">
				<div class="header_block_inner">
					<div class="header_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/talk_about_icon.png" alt="">
					</div>
					<div class="header_text_holder">
						<h3><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?></h3>
						<h4><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else { }?></h4>
					</div>
				</div>
				<div class="talk_about_inner">
					<div class="talk_about_text_holder">
						<h4><?php $value = get_sub_field( "head_profeshional"); if( $value ) { echo $value;} else { }?></h4>
						<?php $value = get_sub_field( "profeshional_content"); if( $value ) { echo $value;} else { }?>

					</div>
					<div class="talk_about_video_holder">
						<?php $value = get_sub_field( "video_profeshional"); if( $value ) { echo $value;} else { }?>
					</div>
				</div>
			</div>
		</section>