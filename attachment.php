<?php
/**
 * Redirect attachment pages to the posts they're attached to or 404 if they have no parent
 */

$redirect_type = 301;
if (is_defined('WP_ENV') && WP_ENV !== 'production') {
    $redirect_type = 302;
}

if ($post->post_parent !== 0) {
    wp_safe_redirect(get_permalink($post->post_parent),$redirect_type);
} else {
    require '404.php';
}