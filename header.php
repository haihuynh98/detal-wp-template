<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Detal_VN
 */


$menu_items = get_detal_top_menu();

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'detal-vn'); ?></a>



		<!-- Header Main Area -->
		<header class="site-header header-style-1">
			<div class="pbmit-header-overlay">
				<div class="pre-header">
					<div class="container">
						<div class="d-flex justify-content-between align-items-center">
							<div class="pbmit-pre-header-left">
								<ul class="pbmit-contact-info">
									<li><i class="pbmit-base-icon-phone-volume-solid"></i> <?= get_field('contact_phone', 'contact_infomation') ?></li>
									<li><i class="pbmit-base-icon-map-marker-alt-solid"></i><?= get_field('location', 'contact_infomation') ?></li>
								</ul>
							</div>
							<div class="pbmit-pre-header-right">
								<ul class="pbmit-contact-info">
									<li><i class="pbmit-base-icon-clock-solid"></i> <?= implode(', ', get_opening_hours_top()) ?></li>
									<li>
										<ul class="pbmit-social-links">
											<li class="pbmit-social-li pbmit-social-facebook">
												<a href="#" target="_blank">
													<span><i class="pbmit-base-icon-facebook-squared"></i></span>
												</a>
											</li>
											<li class="pbmit-social-li pbmit-social-twitter ">
												<a href="#" target="_blank">
													<span><i class="pbmit-base-icon-twitter"></i></span>
												</a>
											</li>
											<li class="pbmit-social-li pbmit-social-linkedin ">
												<a href="#" target="_blank">
													<span><i class="pbmit-base-icon-linkedin-squared"></i></span>
												</a>
											</li>
											<li class="pbmit-social-li pbmit-social-instagram ">
												<a href="#" target="_blank">
													<span><i class="pbmit-base-icon-instagram"></i></span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="site-header-menu">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="d-flex align-items-center justify-content-between">
									<div class="site-branding">
										<span class="site-title">
											<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
												<img class="logo-img" src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="">
											</a>
										</span>
									</div>
									<div class="site-navigations">
										<nav class="main-menu navbar-expand-xl navbar-light">
											<div class="navbar-header">
												<!-- Toggle Button -->
												<button class="navbar-toggler" type="button">
													<i class="pbmit-base-icon-menu-1"></i>
												</button>
											</div>
											<div class="pbmit-mobile-menu-bg"></div>
											<div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
												<div class="pbmit-menu-wrap">
													<span class="closepanel">
														<i class="pbmit-base-icon-cancel"></i>
													</span>

													<ul class="navigation clearfix">
														<?php $index = 0; ?>
														<?php foreach ($menu_items as $menu_item) :
															$index++;
															$is_dropdown = false;
															if (!empty($menu_item['children'])) {
																$is_dropdown = true;
															}
														?>
															<?php if ($is_dropdown) : ?>
																<li class="dropdown">
																	<a href="<?= $menu_item['url'] ?>" href="<?= $menu_item['url'] == '#' ? 'javascript:void(0);' : '' ?>"><?= $menu_item['title'] ?></a>
																	<ul>
																		<?php foreach ($menu_item['children'] as $child) : ?>
																			<li><a href="<?= $child['url'] ?>"><?= $child['title'] ?></a></li>
																		<?php endforeach; ?>
																	</ul>
																</li>
															<?php else : ?>
																<li class="<?= $menu_item['isCurrent'] ? 'active' : '' ?>">
																	<a href="<?= $menu_item['url'] ?>"><?= $menu_item['title'] ?></a>
																</li>
															<?php endif; ?>
														<?php endforeach; ?>
													</ul>
												</div>
											</div>
										</nav>
									</div>
									<div class="pbmit-right-side">
										<div class="pbmit-header-search-btn">
											<a href="#">
												<i class="pbmit-base-icon-search-1"></i>
											</a>
										</div>
										<div class="pbmit-header-button">
											<a href="<?= esc_html(get_field('appointment_link', 'contact_infomation')) ?>" class="pbmit-btn pbmit-btn-outline">Đặt lịch hẹn</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php if (is_front_page()) {
				echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]');
			} ?>
		</header>
		<!-- Header Main Area End Here -->


		<?php $hide = true;
		if (!$hide) : ?>
			<header id="masthead" class="site-header">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$detal_vn_description = get_bloginfo('description', 'display');
					if ($detal_vn_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $detal_vn_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				</div> .site-branding

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'detal-vn'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'echo'                 => false,
						)
					);
					?>
				</nav>
				<!-- #site-navigation -->
			</header>
			<!-- #masthead -->
		<?php endif; ?>

		<div class="page-content">