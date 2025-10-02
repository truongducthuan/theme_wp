<?php
// Template Name: Blogs
get_header();
?>

<?php
// Hero Section
get_template_part('template-parts/blogs/hero-section', null, ['title' => 'Lastest Blogs', 'subtitle' => 'Lastest Blogs']);

// Blogs Section
get_template_part('template-parts/blogs/blog-listing');
?>

<?php
get_footer();
?>