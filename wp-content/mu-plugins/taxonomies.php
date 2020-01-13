<?php
/**
 * Registered custom taxonomies
 */
add_action('init', 'create_case_taxonomies', 0);
function create_case_taxonomies() {
    $labels = array(
        'name' => 'Case categories',
        'add_new_item' => 'Add New Case category',
        'new_item_name' => 'New Case category',
    );
    register_taxonomy('case_category', array('case'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'case_category'),
        'supports' => array('custom-fields')
    ));

}
