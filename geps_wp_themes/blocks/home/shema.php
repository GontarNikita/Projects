<section class="schema_treatment_wrapper" id="shema">
			<div class="container_wrapper">
				<div class="header_block_inner">
					<div class="header_img_holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/schema_treatment_icon.png" alt="">
					</div>
					<div class="header_text_holder">
						<h3><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?></h3>
						<h4><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else { }?></h4>
					</div>
				</div>
				<div class="schema_treatment_inner">
					<div class="schema_table_description_holder">
						<?php $value = get_sub_field( "content_shema"); if( $value ) { echo $value;} else { }?>
					</div>
				</div>
				<div class="schema_treatment_button">
					<a href="#get_shema_lech" class="fancybox">подобрать схему лечения</a>
				</div>
			</div>
		</section>

