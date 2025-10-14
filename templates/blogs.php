<?php
// Template Name: Blogs
get_header();
?>

<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$the_query = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 10,
  'paged' => $paged,
  'orderby' => 'date',
  'order' => 'DESC',
  'post_status' => 'publish',
]);

$data = [
  'the_query' => $the_query,
  'paged' => $paged
];

// Hero Section
get_template_part('template-parts/blogs/hero-section', null, ['title' => '最新情報', 'subtitle' => '最新情報']);

// Blogs Section
get_template_part('template-parts/blogs/blog-listing', null, $data);
?>

<?php
get_footer();
?>