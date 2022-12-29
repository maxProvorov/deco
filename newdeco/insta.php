<?php
/*
Template Name: Insta
Template Post Type: page
*/
$args = array(
	'p' => '594',
);
$query = new WP_Query($args);
while ( $query->have_posts() ) {
$query->the_post();
the_content();
}