<div class="delivery">
  <div class="container_wrapper">


    <div class="slider_delivery">
      <div class="slider_delivery_title">
        <h4><?php $value = get_sub_field( "title_blocks"); if( $value ) { echo $value;} else { }?><br>
          <span><?php $value = get_sub_field( "title_blocks_down"); if( $value ) { echo $value;} else {}?></span>
        </h4>
      </div>
      <div class="slider_wrapper">

     <?php

      	if( have_posts() ){
      		$i = 0;
      		$pcount = count(posts);
          $n_c = 1;
      		while(have_posts() ){
      			the_post();
      			echo '<div class="slider_wrapper_box">';
      			if(have_rows('slider_delivery_wrap')):

      			while(have_rows('slider_delivery_wrap')): the_row();
      			echo '
      			<div class="box_review_holder">
      				<a class="box_review_show" href="#review_popup">';  $image = get_sub_field('slider_delivery_img'); echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'; $value = get_sub_field( "video_type"); if( $value ) { echo $value;} echo '</a>';
      				echo '<div class="box_review_popup" id="review_popup">';
      				$image = get_sub_field('slider_delivery_img'); echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
      				echo '<div class="box_review_popup_text"><h3>';
      				$value = get_sub_field( "name_klient"); if( $value ) { echo $value;} else { }
      				echo '</h3><p>';
      				$value = get_sub_field( "review_klient"); if( $value ) { echo $value;} else { }
      				echo '</p></div></div>
      			</div>';
            if( $n_c == 10 ){
              $n_c = 0;
              echo '</div><div class="slider_wrapper_box">';
            }

            $n_c++;
      			endwhile;
      			endif;

      		}
      		echo '
      	</div>';

      };
      ?>



    </div>
  </div>
</div>