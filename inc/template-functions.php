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
	if (is_page_template('page-templates/check-warranty-page.php')) {
		wp_enqueue_style('warranty', get_template_directory_uri() . '/assets/css/warranty-page.css', array(), '1.0.0', 'all');
	}

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

function get_opening_hours()
{
	return get_field('opening_hours', 'contact_infomation');
}


function get_opening_hours_top()
{
	$openingHours = get_opening_hours();
	$topOpeningHours = [];

	foreach ($openingHours as $openHour) {
		if ($openHour['show_top_header']) {
			$topOpeningHours[] = $openHour['label'] . ': ' . $openHour['hour'];
		}
	}

	return $topOpeningHours;
}


function set_default_language()
{
	return 'vi'; // 'vi' là mã ngôn ngữ Tiếng Việt. Bạn có thể thay đổi thành mã ngôn ngữ khác nếu cần.
}
add_filter('locale', 'set_default_language');

function get_related_posts()
{
	global $post;

	// Lấy danh sách các thẻ hoặc categories của bài viết hiện tại
	$post_tags = wp_get_post_tags($post->ID);
	$post_categories = get_the_category($post->ID);

	// Tạo một mảng chứa các ID của bài viết liên quan
	$related_posts_ids = array();

	// Lấy các bài viết liên quan dựa trên thẻ của bài viết hiện tại
	if ($post_tags) {
		$tag_ids = array();
		foreach ($post_tags as $tag) {
			$tag_ids[] = $tag->term_id;
		}

		$related_posts_args = array(
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page' => 3, // Số bài viết liên quan muốn hiển thị
			'ignore_sticky_posts' => 1,
		);

		$related_posts_query = new WP_Query($related_posts_args);

		if ($related_posts_query->have_posts()) {
			while ($related_posts_query->have_posts()) {
				$related_posts_query->the_post();
				$related_posts_ids[] = get_the_ID();
			}
			wp_reset_postdata();
		}
	}

	// Lấy các bài viết liên quan dựa trên categories của bài viết hiện tại
	if ($post_categories && empty($related_posts_ids)) {
		$category_ids = array();
		foreach ($post_categories as $category) {
			$category_ids[] = $category->term_id;
		}

		$related_posts_args = array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page' => 3, // Số bài viết liên quan muốn hiển thị
			'ignore_sticky_posts' => 1,
		);

		$related_posts_query = new WP_Query($related_posts_args);

		if ($related_posts_query->have_posts()) {
			while ($related_posts_query->have_posts()) {
				$related_posts_query->the_post();
				$related_posts_ids[] = get_the_ID();
			}
			wp_reset_postdata();
		}
	}

	// Trả về các ID của bài viết liên quan
	return $related_posts_ids;
}

function enqueue_admin_flaticon_style()
{
	wp_enqueue_style('flaticon-admin', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all');
	wp_enqueue_style('custom-admin', get_template_directory_uri() . '/assets/css/admin.css');
}
add_action('admin_enqueue_scripts', 'enqueue_admin_flaticon_style');

function get_custom_logo_link()
{
	$custom_logo_id = get_theme_mod('custom_logo'); // Lấy ID của logo từ Customizer
	$logo = wp_get_attachment_image_src($custom_logo_id, 'full'); // Lấy thông tin hình ảnh logo

	if ($logo) {
		return esc_url($logo[0]);
	}

	return false;
}


// Register Custom Post Type
function custom_warranty_management()
{

	$labels = array(
		'name'                  => _x('Warranty Management', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Warranty Management', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Warranty Management', 'text_domain'),
		'name_admin_bar'        => __('Warranty Management', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Items', 'text_domain'),
		'add_new_item'          => __('Add New Item', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Item', 'text_domain'),
		'edit_item'             => __('Edit Item', 'text_domain'),
		'update_item'           => __('Update Item', 'text_domain'),
		'view_item'             => __('View Item', 'text_domain'),
		'view_items'            => __('View Items', 'text_domain'),
		'search_items'          => __('Search Item', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Warranty Management', 'text_domain'),
		'description'           => __('Custom post type for Warranty Management', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access-alt', // Set the icon
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'map_meta_cap'          => true,
	);
	register_post_type('warranty_management', $args);
}
add_action('init', 'custom_warranty_management', 0);

// Add custom column to admin post list
function custom_warranty_management_columns($columns) {
    $columns['warranty_id'] = 'Warranty ID';
    return $columns;
}
add_filter('manage_warranty_management_posts_columns', 'custom_warranty_management_columns');

// Populate the custom column with data
function custom_warranty_management_column_data($column, $post_id) {
    if ($column === 'warranty_id') {
        echo $post_id;
    }
}
add_action('manage_warranty_management_posts_custom_column', 'custom_warranty_management_column_data', 10, 2);

function get_warranty_management_post_by_id($post_id) {
    $post = get_post($post_id);

    if ($post && $post->post_type === 'warranty_management') {
        return [
			'name'=> get_field('name', $post_id),
			'address'=> get_field('address', $post_id),
			'phone'=> get_field('phone', $post_id),
			'email'=> get_field('email', $post_id),
			'date'=> get_field('date', $post_id),
			'service'=> get_field('service', $post_id),
			'service_detail'=> get_field('service_detail', $post_id),
			'warranty_period'=> get_field('warranty_period', $post_id),
			'warranty_coverage'=> get_field('warranty_coverage', $post_id),
			'conditions'=> get_field('conditions', $post_id),
			'care_instructions'=> get_field('care_instructions', $post_id),
		];
    }

    return null;
}

function get_base_url_without_parameters() {
    $current_url = esc_url_raw("http" . (!empty($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
    $parsed_url = parse_url($current_url);
    $base_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'];
    
    return $base_url;
}


function custom_rewrite_rule() {
    add_rewrite_rule('^kiem-tra-bao-hanh/([^/]*)/?', 'index.php?post_type=warranty_management&code=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule');

function custom_query_vars($vars) {
    $vars[] = 'code';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars');

function custom_warranty_permalink_structure($post_link, $post) {
	
    if (is_object($post) && $post->post_type == 'warranty_management') {
        // $code = get_post_meta($post->ID, 'warranty_code', true); // Replace 'warranty_code' with the actual meta key
        if (!empty($post->ID)) {
            return home_url("/kiem-tra-bao-hanh?code=$post->ID");
        }
    }
    return $post_link;
}
add_filter('post_type_link', 'custom_warranty_permalink_structure', 10, 2);

function custom_warranty_redirect() {
    global $post;
    if (is_object($post) && $post->post_type == 'warranty_management') {
        // $code = get_post_meta($post->ID, 'warranty_code', true); // Replace 'warranty_code' with the actual meta key
        if (!empty($post->ID)) {
            wp_redirect(home_url("/kiem-tra-bao-hanh?code=$post->ID"), 301);
            exit;
        }
    }
}
add_action('template_redirect', 'custom_warranty_redirect');