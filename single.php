<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Detal_VN
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	// var_dump(get_field('show_image_cover', get_the_ID(), false));
	if (get_field('show_image_cover', get_the_ID(), false)) {
		echo get_template_part('template-parts/single/title-bar', 'banner', ['title' => get_the_title(), 'image_conver' => get_field('image_cover', get_the_ID(), false)]);
	} else {
		echo get_template_part('template-parts/single/title-bar', null, ['title' => get_the_title()]);
	}

	?>

	<!-- Page Content -->
	<div class="page-content">

		<!-- portfolio Details -->
		<section class="portfolio-single">
			<div class="container">
				<div class="pbmit-portfolio-single">
					<div class="single-content">

						<?php
						while (have_posts()) :
							the_post();

							the_content(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'detal-vn'),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post(get_the_title())
								)
							);
						?>
					</div>

					<div class="pbmit-pf-single-np-nav">
						<?php
							the_post_navigation(
								array(
									'prev_text' => '<span class="pbmit-portfolio-nav-icon"><i class="pbmit-base-icon-left-open"></i></span>
		<span class="pbmit-portfolio-nav-wrapper"><span class="pbmit-portfolio-nav-head">' . esc_html__('Trước:', 'detal-vn') . '</span><span class="pbmit-portfolio-nav nav-title">%title</span>',
									'next_text' => '<span class="pbmit-portfolio-nav-wrapper"><span class="pbmit-portfolio-nav-head">' . esc_html__('Kế tiếp:', 'detal-vn') . '</span><span class="pbmit-portfolio-nav nav-title">%title</span></span>
		<span class="pbmit-portfolio-nav-icon"><i class="pbmit-base-icon-right-open"></i></span>',
								)
							); ?>
					</div>
				<?php endwhile; // End of the loop.
				?>

				<?= get_template_part('template-parts/single/related_posts') ?>
				</div>
			</div>
		</section>
		<!-- portfolio Details End-->

	</div>
	<!-- Page Content End -->



</main><!-- #main -->

<?php
get_footer();
