<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Detal_VN
 */

$menu_items = get_detal_top_menu();
?>

</div>

<!-- footer -->
<footer class="footer site-footer">
	<div class="pbmit-footer-widget-area-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-lg-3">
					<div class="pbmit-footer-boxes-1">
						<img class="pbmit-footerlogo" src="<?= get_template_directory_uri() ?>/assets/images/logo-white.png" alt="">
					</div>
				</div>
				<div class="col-md-12 col-lg-6">
					<form class="pbmit-footer-boxes-2">
						<input type="email" name="EMAIL" placeholder="Địa chỉ email của bạn" required="">
						<button type="submit" value="Sign up">Nhận tin </button>
					</form>
				</div>
				<div class="col-md-12 col-lg-3">
					<div class="pbmit-footer-boxes-3">
						<ul class="pbmit-social-links">
							<li class="pbmit-social-li pbmit-social-facebook">
								<a href="#" target="_blank">
									<span><i class="pbmit-base-icon-facebook-squared"></i></span>
								</a>
							</li>
							<li class="pbmit-social-li pbmit-social-twitter">
								<a href="#" target="_blank">
									<span><i class="pbmit-base-icon-twitter"></i></span>
								</a>
							</li>
							<li class="pbmit-social-li pbmit-social-linkedin">
								<a href="#" target="_blank">
									<span><i class="pbmit-base-icon-linkedin-squared"></i></span>
								</a>
							</li>
							<li class="pbmit-social-li pbmit-social-instagram">
								<a href="#" target="_blank">
									<span><i class="pbmit-base-icon-instagram"></i></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pbmit-footer-widget-area">
		<div class="container">
			<div class="row">
				<div class="pbmit-footer-widget-col-1">
					<div class="widget">
						<h2 class="widget-title">Về chúng tôi</h2>
						<div class="textwidget">
							<p>Trung tâm Nha khoa Quốc tế SGC Dental Center </p>
						</div>
						<div class="pbmit-contact-widget-lines">
							<div class="pbmit-contact-widget-line pbmit-contact-widget-address">Địa chỉ: Số 34, đường Hồ Biểu Chánh, phường 11, quận Phú Nhuận, Tp.HCM</div>
							<div class="pbmit-contact-widget-line pbmit-contact-widget-phone">Điện thoại: <a href="tel:02899959597" style="color:rgba(255,255,255,.9)">028 999 59597</a></div>
						</div>
					</div>
				</div>
				<div class="pbmit-footer-widget-col-2">
					<div class="widget">
						<h2 class="widget-title">Thông tin</h2>
						<div class="textwidget">
							<ul>
                                <?php foreach ($menu_items as $menu_item) :?>
                                    <li class="<?= $menu_item['isCurrent'] ? 'active' : '' ?>">
                                        <a href="<?= $menu_item['url'] ?>"><?= $menu_item['title'] ?></a>
                                    </li>
                                <?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="pbmit-footer-widget-col-3">
					<div class="widget">
						<h2 class="widget-title">Tin tức mới</h2>
						<ul class="pbmit-rpw-list">
                            <?php foreach (get_recent_posts() as $post) : ?>
							<li>
								<a href="<?= $post['link'] ?>">
									<span class="pbmit-rpw-img">
										<img src="<?= $post['image'] ?>" class="img-fluid" alt="<?= $post['title'] ?>">
									</span>
								</a>
								<span class="pbmit-rpw-content">
									<span class="pbmit-rpw-title">
										<a href="<?= $post['link'] ?>"><?= $post['title'] ?></a>
									</span>
									<span class="pbmit-rpw-date">
										<a href="<?= $post['link'] ?>"><?= $post['date'] ?></a>
									</span>
								</span>
							</li>
                            <?php endforeach;?>
						</ul>
					</div>
				</div>
				<div class="pbmit-footer-widget-col-4">
					<div class="widget">
						<h2 class="widget-title">Giờ mở cửa</h2>
						<div class="textwidget">
							<div class="pbmit-timelist-wrapper">
								<ul class="pbmit-timelist-list">
									<li>
										<span class="pbmit-timelist-li-title">Thứ 2 – Thứ 7</span>
										<span class="pbmit-timelist-li-value">8:00 - 20:00</span>
									</li>
									<li>
										<span class="pbmit-timelist-li-title">Chủ nhật</span>
										<span class="pbmit-timelist-li-value">7:30 - 21:00</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pbmit-footer-bottom">
		<div class="container">
			<div class="pbmit-footer-text-inner">
				<div class="row">
					<div class="col-md-12">
						<div class="pbmit-footer-copyright-text-area"> Copyright © 2023
							<a href="/">Detal VN</a>, All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer End -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>