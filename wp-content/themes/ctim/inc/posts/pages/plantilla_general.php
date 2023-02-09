<?php

if (function_exists('acf_add_local_field_group')) {
	// Your ACF specific code here
    acf_add_local_field_group(array(
        'key' => 'slug_page',
        'title' => 'Slug page',
        'menu_order' => 0,
        'style' => 'default',
        'position' => 'normal',
        'fields' => array(
            array(
                'key' => 'slug_page',
                'label' => 'Slug page',
                'name' => 'slug_page',
                'type' => 'text',
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/page-platilla_general.php'
                )
            )
        )
    
    ));
}

add_action('acf/init', function() {

	acf_add_local_field_group(array(
        'key' => 'slug_page',
        'title' => 'Slug page',
        
        'fields' => array(
            array(
                'key' => 'slug_page',
                'label' => 'Slug page',
                'name' => 'slug_page',
                'type' => 'text',
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/page-platilla_general.php'
                )
            )
        ),
        'menu_order' => 0,
        'style' => 'default',
        'position' => 'normal',
    ));

});