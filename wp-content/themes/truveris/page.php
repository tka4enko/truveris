<?php
wp_head();
if (class_exists('CustomMultipagePlugin')) {
    new CustomMultipagePlugin();
}
wp_footer();
