<?php
// Template Name: Archive
get_header();

$category = get_queried_object(); // current category object
$slug     = $category->slug;
$paged    = (get_query_var('paged')) ? get_query_var('paged') : 1;

$the_query = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => 10,
  'paged'          => $paged,
  'orderby'        => 'date',
  'order'          => 'DESC',
  'post_status'    => 'publish',
  'tax_query'      => [
    [
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => $slug, // e.g. "cloud-solutions"
    ]
  ]
]);

// echo '<prev class="text-black">';
// print_r($the_query->posts);
// echo '</prev>';

$data = [
  'the_query' => $the_query,
  'paged' => $paged
];

// Hero Section
get_template_part('template-parts/blogs/hero-section', null, ['title' => 'Lastest Blogs', 'subtitle' => 'Lastest Blogs']);

// Blogs Section
get_template_part('template-parts/blogs/blog-listing', null, $data);

get_footer();
