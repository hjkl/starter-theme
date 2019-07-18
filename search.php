<?php

use Timber\Timber;
use Timber\PostQuery;

$templates = array('search.twig', 'index.twig');

$context = Timber::get_context();
$context['title'] = 'Search results for ' . get_search_query();
$context['posts'] = new PostQuery();

Timber::render($templates, $context);
