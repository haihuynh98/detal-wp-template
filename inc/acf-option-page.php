<?php 

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    acf_add_options_page(array(
        'menu_slug' => 'contact-infomation',
        'page_title' => 'Contact infomation',
        'active' => true,
        'menu_title' => 'Contact infomation',
        'capability' => 'edit_posts',
        'parent_slug' => 'detal-settings',
        'position' => '',
        'icon_url' => '',
        'redirect' => false,
        'post_id' => 'contact_infomation',
        'autoload' => false,
        'update_button' => 'Update',
        'updated_message' => 'Contact Updated',
    ));
    
    acf_add_options_page(array(
        'menu_slug' => 'detal-settings',
        'page_title' => 'Detal settings',
        'active' => true,
        'menu_title' => 'Detal settings',
        'capability' => 'edit_posts',
        'parent_slug' => '',
        'position' => '',
        'icon_url' => '',
        'redirect' => true,
        'post_id' => 'detal_settings',
        'autoload' => false,
        'update_button' => 'Update',
        'updated_message' => 'Options Updated',
    ));
    
}