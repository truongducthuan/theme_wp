<?php
/*
Template Name: Home
*/

get_header();
?>

<?php
// Hero Section
get_template_part('template-parts/hero-section');

// Abount Section
get_template_part('template-parts/about-section');

// Logo Carousel Section
get_template_part('template-parts/logo-carousel');

// Services Section
get_template_part('template-parts/services-section');

// Statistics Section 
get_template_part('template-parts/statistics-section');

// Team members Section
// get_template_part('template-parts/team-section');

// Services flow Section
get_template_part('template-parts/service-flow');

// Project carousel Section
get_template_part('template-parts/project-carousel-section');

// Contact Section
get_template_part('template-parts/contact-section');
?>


<?php get_footer(); ?>