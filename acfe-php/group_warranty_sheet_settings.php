<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_warranty_sheet_settings',
	'title' => 'Warranty Sheet settings',
	'fields' => array(
		array(
			'key' => 'field_64f47f36390d6',
			'label' => 'Sheet ID',
			'name' => 'sheet_id',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '1V-wyvwu_SLUv9G2pRtJit3n521fhwOs9vZKXbvH_dFY',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_64f47f7f390d7',
			'label' => 'Sheet Name',
			'name' => 'sheet_name',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'warranty!A:A',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'warranty-sheet-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1693745097,
));

endif;