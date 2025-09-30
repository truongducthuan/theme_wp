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
?>


<?php get_footer(); ?>