<?php
/**
 * Registered custom post types
 */
add_action( 'init', 'register_case_post_type' );
function register_case_post_type() {
    register_post_type( 'Case',
        array(
            'labels' => array(
                'name' => 'Cases',
            ),
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor' ),
            'has_archive' => false
        )
    );
}