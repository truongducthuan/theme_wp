<?php
// Template Name: Search

get_header();

$keyword = get_search_query();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$the_query = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 10,
  'paged' => $paged,
  's' => $keyword,
  'orderby' => 'date',
  'order' => 'DESC',
  'post_status' => 'publish',
]);

// echo '<prev class="text-black">';
// print_r($blogs->posts);
// echo '</prev>';

$data = [
  'the_query' => $the_query,
  'paged' => $paged
];

// Hero Section
get_template_part('template-parts/blogs/hero-section', null, ['title' => 'Search Blogs', 'subtitle' => 'Search Blogs']);

// Blogs Section
get_template_part('template-parts/blogs/blog-listing', null, $data);

get_footer();
