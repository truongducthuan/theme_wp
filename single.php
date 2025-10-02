<?php

get_header();

$categories = get_the_category();
$url = get_field('blog_image', $post->ID);

// Hero Section
get_template_part('template-parts/blogs/hero-section', null, ['title' => $post->post_title, 'subtitle' => 'Blog Details']);

get_template_part('template-parts/blogs/blog-single', null, ['url' => $url, 'categories' => $categories]);

get_footer();
