<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Detal_VN
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function detal_vn_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'detal_vn_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function detal_vn_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'detal_vn_pingback_header');


function detal_vn_enqueue_scripts()
{
	// Enqueue CSS files
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '5.15.3', 'all');
	wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all');
	wp_enqueue_style('pbminfotech-base-icons', get_template_directory_uri() . '/assets/css/pbminfotech-base-icons.css', array(), '1.0.0', 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '5.4.5', 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1.0', 'all');
	wp_enqueue_style('shortcode', get_template_directory_uri() . '/assets/css/shortcode.css', array(), '1.0.0', 'all');
	wp_enqueue_style('base', get_template_directory_uri() . '/assets/css/base.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
	wp_enqueue_style('revolution', get_template_directory_uri() . '/assets/revolution/rs6.css', array(), '6.4.6', 'all');


	// Đăng ký và nạp các script cần thiết
	wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.6.0', true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.14.7', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '5.0.2', true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), '2.0.5', true);
	wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), '0.4.1', true);
	wp_enqueue_script('numinate', get_template_directory_uri() . '/assets/js/numinate.min.js', array(), '1.0.5', true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '7.0.3', true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.1.0', true);
	wp_enqueue_script('circle-progress', get_template_directory_uri() . '/assets/js/circle-progress.js', array(), '1.2.2', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true);
	wp_enqueue_script('revolution-rslider', get_template_directory_uri() . '/assets/revolution/rslider.js', array(), '6.5.21', true);
	wp_enqueue_script('revolution-rbtools', get_template_directory_uri() . '/assets/revolution/rbtools.min.js', array(), '6.5.21', true);
	wp_enqueue_script('revolution-rs6', get_template_directory_uri() . '/assets/revolution/rs6.min.js', array(), '6.5.21', true);
}

add_action('wp_enqueue_scripts', 'detal_vn_enqueue_scripts');

function recursive_menu_items($menu_items, $parent_id = 0)
{
	$menu_list = '';
	$has_children = false;

	// Tìm các mục con của $parent_id
	foreach ($menu_items as $menu_item) {
		if ($menu_item->menu_item_parent == $parent_id) {
			if (!$has_children) {
				$has_children = true;
				$menu_list .= '<ul>';
			}

			$menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
			$menu_list .= recursive_menu_items($menu_items, $menu_item->ID);
			$menu_list .= '</li>';
		}
	}

	if ($has_children) {
		$menu_list .= '</ul>';
	}

	return $menu_list;
}


function get_detal_top_menu()
{
	$locations = get_nav_menu_locations();
	$theme_location = 'menu-1';
	$menu = get_term($locations[$theme_location], 'nav_menu');

	return get_menu_items($menu->term_id);
}

function get_menu_items($menu_id)
{
	global $wp;
	$menu_items = wp_get_nav_menu_items($menu_id);
	$menu_array = array();

	foreach ($menu_items as $item) {
		$current_url = untrailingslashit(home_url(add_query_arg(array(), $wp->request)));
		$menu_item_url = untrailingslashit($item->url);
		$menu_item = array(
			'title' => $item->title,
			'url' => $item->url,
			'children' => array(),
			'isCurrent' =>  $current_url == $menu_item_url
		);

		if ($item->menu_item_parent) {
			$parent_id = $item->menu_item_parent;
			$menu_array[$parent_id]['children'][] = $menu_item;
		} else {
			$menu_array[$item->ID] = $menu_item;
		}
	}

	return $menu_array;
}
