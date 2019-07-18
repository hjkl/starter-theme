<?php

use Timber\Timber;
use Timber\PostQuery;

$templates = array('index.twig');

$context = Timber::get_context();
$context['posts'] = new PostQuery();
if (is_home()) {
	array_unshift($templates, 'front-page.twig', 'home.twig');
}
Timber::render($templates, $context);