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
									<li><i class="pbmit-base-icon-phone-volume-solid"></i> 0123-456-789</li>
									<li><i class="pbmit-base-icon-map-marker-alt-solid"></i>123 Đinh Bộ Lĩnh, P.24, Q. Bình Thạnh, Tp. Hồ Chí Minh</li>
								</ul>
							</div>
							<div class="pbmit-pre-header-right">
								<ul class="pbmit-contact-info">
									<li><i class="pbmit-base-icon-clock-solid"></i> Thứ 2 đến Thứ 6 - 9:00 đến 18:00</li>
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
											<a href="/">
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
														<li class="active">
															<a href="/">Trang Chủ</a>
														</li>
														<li class="dropdown">
															<a href="#">Dịch vụ</a>
															<ul>
																<li><a href="#">Bọc răng sứ</a></li>
																<li><a href="#">Nhổ răng khôn</a></li>
																<li><a href="#">Trám răng</a></li>
																<li><a href="#">Tẩy trắng răng</a></li>
																<li><a href="#">Cạo vôi răng</a></li>
															</ul>
														</li>
														<li class="">
															<a href="#">Bảng Giá</a>
														</li>
														<li class="">
															<a href="#">Ưu đãi</a>
														</li>
														<li class="">
															<a href="#">Tin tức</a>
														</li>
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
											<a href="#" class="pbmit-btn pbmit-btn-outline">Đặt lịch hẹn</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pbmit-slider-area">
				<!-- START Slider 01 REVOLUTION SLIDER 6.5.21 -->
				<p class="rs-p-wp-fix"></p>
				<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="slider-01" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
					<rs-module id="rev_slider_1_1" style="" data-version="6.5.21">
						<rs-slides>
							<rs-slide style="position: absolute;" data-key="rs-13" data-title="Slide" data-thumb="<?= get_template_directory_uri() ?>/assets/revolution/images/slider1-01.jpg" data-anim="ms:600;r:0;" data-in="o:0;" data-out="a:false;">
								<img src="<?= get_template_directory_uri() ?>/assets/revolution/images/slider1-01.jpg" alt="" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="<?= get_template_directory_uri() ?>/assets/revolution/images/slider1-01.jpg" data-no-retina>
								<!--
							--><rs-layer id="slider-7-slide-13-layer-1" data-type="text" data-color="#4f87fb" data-rsp_ch="on" data-xy="xo:30px,30px,28px,30px;yo:319px,319px,169px,49px;" data-text="s:14;l:20;ls:2px;fw:700;a:inherit;" data-vbility="t,t,f,f" data-frame_0="x:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:290;sp:1500;sR:290;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:7210;" style="z-index:6;font-family:'Mulish';text-transform:uppercase;">Online Solution
								</rs-layer><!--

							--><rs-layer id="slider-7-slide-13-layer-2" data-type="text" data-color="#130947" data-rsp_ch="on" data-xy="xo:30px,30px,34px,25px;yo:352px,352px,213px,131px;" data-text="s:55,55,34,24;l:60,60,44,30;ls:-1px;fw:900;a:inherit;" data-frame_0="x:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:1080;sp:1500;sR:1080;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:6420;" style="z-index:7;font-family:'Mulish';">Take the<span class="thsn-skincolor">
										world's</span> best<br>
									Quality Treatment.
								</rs-layer><!--

							--><rs-layer id="slider-7-slide-13-layer-3" class="tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="xo:34px,34px,38px,29px;yo:466px,466px,298px,188px;" data-text="fw:900;a:inherit;" data-dim="w:170px,170px,110px,75px;h:5px,5px,4px,3px;" data-frame_0="x:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:1900;sp:1500;sR:1900;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:5600;" style="z-index:5;background-color:#4f87fb;">
								</rs-layer><!--

							--><a id="slider-7-slide-13-layer-4" class="rs-layer rev-btn" href="http://dentiq-demo.pbminfotech.com/demo1/contact-us/" target="_self" rel="nofollow" data-type="button" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="xo:30px,30px,39px,26px;yo:527px,527px,324px,207px;" data-text="s:13,13,7,4;l:26,26,15,9;ls:1px,1px,0px,0px;fw:700;a:inherit;" data-padding="t:15,15,9,6;r:40,40,25,15;b:15,15,9,6;l:40,40,25,15;" data-border="bor:4px,4px,4px,4px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:3000;sp:500;sR:3000;" data-frame_999="o:0;tp:600;st:w;sR:5500;" data-frame_hover="bgc:#130947;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:8;background-color:#4f87fb;font-family:'Mulish';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">CONTACT
									US
								</a><!--

							--><rs-layer id="slider-7-slide-13-layer-5" data-type="image" data-rsp_ch="on" data-xy="xo:198px,198px,198px,109px;yo:509px,509px,509px,156px;" data-text="l:22;a:inherit;" data-dim="w:['109px','109px','109px','109px'];h:['109px','109px','109px','109px'];" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:3510;sp:500;sR:3510;" data-frame_999="o:0;tp:600;st:w;sR:4990;" style="z-index:9;"><img src="<?= get_template_directory_uri() ?>/assets/revolution/images/slider-icon.png" alt="slider-icon" class="tp-rs-img rs-lazyload" width="109" height="109" data-lazyload="<?= get_template_directory_uri() ?>/assets/revolution/images/slider-icon.png" data-no-retina>
								</rs-layer><!--

							--><a id="slider-7-slide-13-layer-6" class="rs-layer" href="http://dentiq-demo.pbminfotech.com/demo1/make-appointments/" target="_self" rel="nofollow" data-type="text" data-color="#130947" data-rsp_ch="on" data-xy="xo:298px;yo:545px;" data-text="s:13;l:22;fw:800;a:inherit;" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:3560;sp:500;sR:3560;" data-frame_999="o:0;tp:600;st:w;sR:4940;" style="z-index:10;font-family:'Mulish';text-transform:uppercase;">Get Free Checkup
								</a><!--
--> </rs-slide>
							<rs-slide style="position: absolute;" data-key="rs-20" data-title="Slide" data-thumb="<?= get_template_directory_uri() ?>/assets/revolution/images/slider1-02.jpg" data-anim="ms:600;r:0;" data-in="o:0;" data-out="a:false;">
								<img src="<?= get_template_directory_uri() ?>/assets/revolution/images/slider1-02.jpg" alt="" title="slider1-02" width="1900" height="870" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="<?= get_template_directory_uri() ?>/assets/revolution/images/slider1-02.jpg" data-no-retina>
								<!--
							--><rs-layer id="slider-7-slide-20-layer-1" data-type="text" data-color="#4f87fb" data-rsp_ch="on" data-xy="xo:30px,30px,28px,30px;yo:319px,319px,169px,49px;" data-text="s:14;l:20;ls:2px;fw:700;a:inherit;" data-vbility="t,t,f,f" data-frame_0="x:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:290;sp:1500;sR:290;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:7210;" style="z-index:6;font-family:'Mulish';text-transform:uppercase;">Online Solution
								</rs-layer><!--

							--><rs-layer id="slider-7-slide-20-layer-2" data-type="text" data-color="#130947" data-rsp_ch="on" data-xy="xo:30px,30px,34px,25px;yo:352px,352px,213px,131px;" data-text="s:55,55,34,24;l:60,60,44,30;ls:-1px;fw:900;a:inherit;" data-frame_0="x:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:1080;sp:1500;sR:1080;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:6420;" style="z-index:7;font-family:'Mulish';">Take the<span class="thsn-skincolor">
										world's</span> best<br>
									Quality Treatment.
								</rs-layer><!--

							--><rs-layer id="slider-7-slide-20-layer-3" class="tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="xo:34px,34px,38px,29px;yo:466px,466px,298px,188px;" data-text="fw:900;a:inherit;" data-dim="w:170px,170px,110px,75px;h:5px,5px,4px,3px;" data-frame_0="x:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:1900;sp:1500;sR:1900;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;st:w;sR:5600;" style="z-index:5;background-color:#4f87fb;">
								</rs-layer><!--

							--><a id="slider-7-slide-20-layer-4" class="rs-layer rev-btn" href="http://dentiq-demo.pbminfotech.com/demo1/contact-us/" target="_self" rel="nofollow" data-type="button" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="xo:30px,30px,39px,26px;yo:527px,527px,324px,207px;" data-text="s:13,13,7,4;l:26,26,15,9;ls:1px,1px,0px,0px;fw:700;a:inherit;" data-padding="t:15,15,9,6;r:40,40,25,15;b:15,15,9,6;l:40,40,25,15;" data-border="bor:4px,4px,4px,4px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:3000;sp:500;sR:3000;" data-frame_999="o:0;tp:600;st:w;sR:5500;" data-frame_hover="bgc:#130947;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;" style="z-index:8;background-color:#4f87fb;font-family:'Mulish';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">CONTACT
									US
								</a><!--

							--><rs-layer id="slider-7-slide-20-layer-5" data-type="image" data-rsp_ch="on" data-xy="xo:198px,198px,198px,109px;yo:509px,509px,509px,156px;" data-text="l:22;a:inherit;" data-dim="w:['109px','109px','109px','109px'];h:['109px','109px','109px','109px'];" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:3510;sp:500;sR:3510;" data-frame_999="o:0;tp:600;st:w;sR:4990;" style="z-index:9;"><img src="<?= get_template_directory_uri() ?>/assets/revolution/images/slider-icon.png" alt="slider-icon" class="tp-rs-img rs-lazyload" width="109" height="109" data-lazyload="<?= get_template_directory_uri() ?>/assets/revolution/images/slider-icon.png" data-no-retina>
								</rs-layer><!--

							--><a id="slider-7-slide-20-layer-6" class="rs-layer" href="http://dentiq-demo.pbminfotech.com/demo1/make-appointments/" target="_self" rel="nofollow" data-type="text" data-color="#130947" data-rsp_ch="on" data-xy="xo:298px;yo:545px;" data-text="s:13;l:22;fw:800;a:inherit;" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:3560;sp:500;sR:3560;" data-frame_999="o:0;tp:600;st:w;sR:4940;" style="z-index:10;font-family:'Mulish';text-transform:uppercase;">Get Free Checkup
								</a><!--
--> </rs-slide>
						</rs-slides>
					</rs-module>
				</rs-module-wrap>
				<!-- END REVOLUTION SLIDER -->
			</div>
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
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'detal-vn'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
				<!-- #site-navigation -->
			</header>
			<!-- #masthead -->
		<?php endif; ?>

		<div class="page-content">