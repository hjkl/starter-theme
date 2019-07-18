<?php

use Timber\Timber;

$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
$templates = array(
    'single-' . $post->ID . '.twig',
    'single-' . $post->post_name . '.twig',
    'single-' . $post->post_type . '.twig',
    'single.twig'
);

if (post_password_required($post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render($templates, $context);
}
