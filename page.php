<?php
/**
 * The default template for displaying all pages
 *
 * @package Customdriveways
 */

// get the main context
$context = Timber::context();
$context['post'] = new Timber\Post();
Timber::render(array($context['post']->post_name . '.twig', 'page.twig'), $context);