<?php

use Timber\Timber;

status_header(404);
$context = Timber::get_context();
Timber::render(array('404.twig'), $context);
