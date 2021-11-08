<?php
/**
 * The 404 template
 *
 * @package Customdriveways
 */

// get the main context
$context = Timber::context();
// render the template in 404.twig with the above context
Timber::render( '404.twig', $context );