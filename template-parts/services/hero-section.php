<section class="w-full bg-white">
  <div class="w-full">
    <canvas id="networkCanvas" class="network-canvas"></canvas>
    <img
      src="<?php echo get_template_directory_uri() . '/assets/imgs/services/bander.jpg'; ?>"
      alt="Digital transformation process visualization"
      class="w-full h-auto shadow-2xl object-cover" />
  </div>
  <div class="mx-auto w-full bg-white max-w-7xl text-[#222627]">
    <!-- blog 1 -->
    <?php get_template_part('template-parts/services/out-service'); ?>

    <!-- blogs 2 -->
    <?php get_template_part('template-parts/services/development-support'); ?>

    <!-- blog 3 -->
    <?php get_template_part('template-parts/services/example-support'); ?>

    <!-- blogs 4 -->
    <?php get_template_part('template-parts/services/services-provided'); ?>

    <!-- blogs 5 -->
    <?php get_template_part('template-parts/services/service-flow'); ?>

    <!-- blogs 6 -->
    <?php get_template_part('template-parts/services/service-contract'); ?>

  </div>
</section>