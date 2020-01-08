<?php
// Allow File Extension Upload Support
if (class_exists('Timber')){
    Timber::$cache = true;
}
/**
 * Possibility to add files not allow from Wordpress
 */
add_filter('upload_mimes', 'trs_myme_types', 1, 1);
function trs_myme_types($mime_types) {
    $mime_types['eps'] = 'application/eps';
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    $template_directory_url = get_template_directory_uri();
    wp_enqueue_style('sage/main.css', $template_directory_url .'/dist/styles/main.css', false, null);
    wp_enqueue_script('sage/main.js', $template_directory_url .'/dist/scripts/main.js', ['jquery'], null, true);
    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);
