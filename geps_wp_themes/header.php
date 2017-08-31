<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<script type="text/javascript">
			var pathInfo = {
				base: '<?php echo get_template_directory_uri(); ?>/',
				css: 'css/',
				js: 'js/',
				swf: 'swf/',
			}
		</script>
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.ico" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" />

	</head>
	<body <?php body_class(); ?>>
		<div id="container">
			<header>
		<div class="container_wrapper">
			<div class="wrapper_justify">
				<div class="wrapper_left">
				<?php
					$logo_text = '<div class="logo_text_inner">
							<div class="logo_name_company">гепс - ру</div>
							<div class="logo_tagline_company">препараты от гепатита <span>С</span></div>
						</div>';
					if ( is_front_page()) { ?>
					<div class="logo_wrapper">
						<div class="logo_img_inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
						</div>
							<?php echo $logo_text; ?>
						</div>
					<?php } else { ?>
						<a href="<?php bloginfo('url') ?>/" class="logo_wrapper">
						<div class="logo_img_inner">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
						</div>
							<?php echo $logo_text; ?>
						</a>
				<?php } ?>

					<div class="phone_wrapper">
						<div class="phone_inner">
							<a href="tel:<?php the_field('phone_left_side', 'options')?>"><?php the_field('phone_left_side', 'options')?></a>
						</div>
						<div class="call_me_inner">
							<a href="#calback_form" class="fancybox">Позвоните мне</a>
						</div>
					</div>
				</div>
				<div class="wrapper_right">
					<div class="phone_messenger_wrapper">
						<div class="phone_messenger_inner">
							<?php the_field('phone', 'options')?>
						</div>
						<div class="call_me_messenger_inner">
							<a href="viber://forward?text=<?php the_field('phone', 'options')?>"> Viber</a>
							<a href="whatsapp://send?phone=<?php the_field('phone', 'options')?>">Whatsapp</a>

						</div>
					</div>
					<div class="time_left_wrapper">
						<div class="time_left_text">
							режим работы <br> оператора с 09:00 до <br> 23:00 по московскому <br> времени ежедневно
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

			<?php /* Custom logo support. Uncomment or delete on production
			<?php if ( function_exists( 'the_custom_logo' ) ) : ?>
				<div class="logo">
				 <?php the_custom_logo(); ?>
				</div>
			<?php endif; ?>
			*/ ?>
<?php if ( is_front_page()) { ?>
<main>
		<section class="treatment_wrapper">
			<div class="container_wrapper">
				<div class="treatment_text_wrapper">
					<p>Вылечить гепатит С за 3 месяца</p>
					<p class="rezult">с гарантией результата <span>100%</span></p>
					<div class="money_inner">
						<a href="#get_gift" class="money mobile fancybox">или мы вернем Вам деньги</a>
						<p class="money not_mobile">или мы вернем Вам деньги</p>
					</div>
				</div>
				<div class="video_form_wrapper">
					<div class="video_wrapper">
						<?php the_field('video_block_header', 'options')?>
					</div>
					<div class="form_wrapper">
						<div class="form_text">
							<p>Оставьте заявку <span class="form_text_extra">и получите комплекс витаминов</span> <span class="form_text_gift"> в подарок</span></p>
						</div>
						<div class="form_order">
							<?php echo do_shortcode( '[contact-form-7 id="88" title="Форма получить подарок"]' ); ?>
						</div>

					</div>
				</div>
			</div>
		</section>
		<section class="menu_wrapper">
			<div class="container_wrapper">
				<div class="wrapper_justify">
					<nav>
						<div class="close_icon"><i class="fa fa-times" aria-hidden="true"></i></div>
						<ul>
							<li><a href="#product">препараты</a></li>
							<li><a href="#certificates">сертификаты</a></li>
							<li><a href="#differences">как откличить оригинал</a></li>
							<li><a href="#shema">схемы лечения</a></li>
							<li><a href="#delivery">заказ и доставка</a></li>
							<li><a href="#video_reviwes">отзывы</a></li>
							<li><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">блог</a></li>
						</ul>
						<div class="mobile_holder">
							<div class="menu_phone">
								<?php the_field('phone_left_side', 'options')?>
							</div>
							<div class="menu_order_button">
								<a href="#get_kosult" class="fancybox">получить консультацию</a>
							</div>
							<div class="phone_messenger_inner">
								<?php the_field('phone', 'options')?>
							</div>
							<div class="call_me_messenger_inner">
								<a href="viber://forward?text=<?php the_field('phone', 'options')?>">Viber</a>
								<a href="whatsapp://send?phone=<?php the_field('phone', 'options')?>">Whatsapp</a>
							</div>
							<div class="logo_img_inner">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
							</div>
						</div>
					</nav>
					<div class="nav_holder">
						<a class="open-navigation ssm-toggle-nav ssm-nav-visible" href="#" title="Open / close">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>
					</div>
					<div class="menu_order_wrapper">
						<div class="menu_phone">
							<?php the_field('phone_left_side', 'options')?>
						</div>
						<div class="menu_order_button">
							<a href="#get_kosult" class="fancybox">получить консультацию</a>
						</div>
					</div>
				</div>
			</div>
		</section>



<?php } else { ?>
<section class="menu_wrapper">
	<div class="container_wrapper">
		<div class="wrapper_justify">
			<nav>
			<div class="close_icon"><i class="fa fa-times" aria-hidden="true"></i></div>
			<?php if( has_nav_menu( 'primary' ) )
					wp_nav_menu( array(
						'container' => false,
						'theme_location' => 'primary',
						'menu_id'        => 'navigation',
						'menu_class'     => 'navigation',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						//'walker'         => new Custom_Walker_Nav_Menu//
						)
					); ?>
			<div class="mobile_holder">
							<div class="menu_phone">
								<?php the_field('phone_left_side', 'options')?>
							</div>
							<div class="menu_order_button">
								<a href="#get_kosult" class="fancybox">получить консультацию</a>
							</div>
							<div class="phone_messenger_inner">
								<?php the_field('phone', 'options')?>
							</div>
							<div class="call_me_messenger_inner">
								<a href="viber://forward?text=<?php the_field('phone', 'options')?>">Viber</a>
								<a href="whatsapp://send?phone=<?php the_field('phone', 'options')?>">Whatsapp</a>
							</div>
							<div class="logo_img_inner">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
							</div>
						</div>
			</nav>
			<div class="nav_holder">
						<a class="open-navigation ssm-toggle-nav ssm-nav-visible" href="#" title="Open / close">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>
					</div>
					<div class="menu_order_wrapper">
						<div class="menu_phone">
							<?php the_field('phone_left_side', 'options')?>
						</div>
						<div class="menu_order_button">
							<a href="#get_kosult" class="fancybox">получить консультацию</a>
						</div>
					</div>
		</div>
	</div>
</section>
	<?php } ?>