
<section class="video_reviwes" id="video_reviwes">
  <div class="container_wrapper">
    <div class="header_block_inner">
      <div class="header_img_holder">
        <img src="<?php echo get_template_directory_uri(); ?>/img/video_reviews_icon.png" alt="">
      </div>
      <div class="header_text_holder">
        <h3><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?></h3>
        <h4><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else {}?></h4>
      </div>
    </div>
   <?php
$loop = new WP_Query(array(
	'posts_per_page' => 20,
	'post_type' => 'video_coments',
	));

if( $loop->have_posts() ){

	echo '
	<section class="video_reviwes video_reviwes_page">
		<div class="slider_delivery slider_video_feedback">
			<div class="slider_wrapper slider_feedback_page">
				<div class="slider_wrapper_box">';

					$i = 0;
					$pcount = count( $loop->posts );
					while( $loop->have_posts() ){
						$loop->the_post();

						echo '
						<div class="video_reviwes_wrapper">
							'; if(have_rows('video_wrap')):
							while(have_rows('video_wrap')): the_row();
							echo '
							<div class="box_review_holder">
								<a class="fancyVideo" data-type="iframe" href="'; $value = get_sub_field( "video_type"); if( $value ) { echo $value;} echo '"><img src="'; $value = get_sub_field( "video_type"); if( $value ) { echo $value;} echo '" alt=""></a>
							</div>';
							endwhile;
							endif;
							echo
							'</div>';
							$i++;
							if( ! ($i % 10) && ($pcount != $i) )
								echo '</div><div class="slider_wrapper_box">';
						}

						echo '
					</div>
				</div>
			</div>
		</section>';
	} wp_reset_postdata();
	?>

  <div class="buts_recomends">
    <div class="but_rec"><a href="#get_kosult" class="fancybox">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a></div>
  </div>
</div>
</section>