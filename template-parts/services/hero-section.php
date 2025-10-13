<style>
  #home-hero::after {
    content: "";
    position: absolute;
    bottom: -50%;
    z-index: 10;
    left: 0;
    width: 100%;
    height: 100%;
    background: url(<?php echo get_template_directory_uri() . '/assets/imgs/bg-synora.png'; ?>);
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
  }

  #home-hero::before {
    content: "";
    position: absolute;
    top: 100%;
    /* z-index: 5; */
    left: 45%;
    width: 100%;
    height: 18%;
    background: linear-gradient(135deg, var(--fourth-color) 50%, var(--fourth-color) 100%);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
  }

  @media (max-width: 768px) {
    #home-hero::before {
      display: none;
    }
  }
</style>

<section class="relative z-10 mt-0 lg:mt-0 px-5 lg:px-20 pt-28 pb-8 lg:pt-44 lg:pb-20" id="home-hero">
  <!-- Network Animation Canvas -->
  <canvas id="networkCanvas" class="network-canvas"></canvas>

  <!-- Bg logo -->
  <div class="mx-auto">
    <div class="items-center">
      <div class="herro-text relative z-20 hero-group_text space-y-6 ml-0 xl:ml-26 2xl:ml-34 pl-0 md:pl-5 lg:pl-10">
        <div class="inline-block">
          <span class="bg-secondary px-6 py-2 rounded text-sm font-medium">
            サービス
          </span>
        </div>

        <h1 class="text-third line-height-2 text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold whitespace-nowrap">
          テクノロジーで、<br />旅の体験を革新する
        </h1>

        <p class="text-slate-700 text-xl lg:text-2xl leading-relaxed w-full">
          貴社の技術チームを拡張し、観光業界の深い知見と最先端の技術力でDXを加速させます。<br />
          複雑なシステム課題の解決から内製化支援まで、一貫したサポートでビジネスの成長を共に実現します。
        </p>

        <!--         <button data-text="Get Start Now" class="techin-btn relative bg-secondary px-8 py-4 rounded font-semibold text-lg transition-all duration-300 transform">
          <span>Get Start Now</span>
        </button> -->
      </div>

    </div>
  </div>
</section>

<section class="w-full bg-white">
  <canvas id="networkCanvas" class="network-canvas"></canvas>

  <div class="w-full hidden">
    <img
      src="<?php echo get_template_directory_uri() . '/assets/imgs/services/bander.jpg'; ?>"
      alt="Digital transformation process visualization"
      class="w-full h-auto shadow-2xl object-cover" />
  </div>
  <!-- <div class="mx-auto w-full pt-5 lg:pt-10 bg-white max-w-7xl text-[#222627]"> -->
  <!-- blog 1 -->
  <?php get_template_part('template-parts/services/out-service'); ?>

  <!-- blogs 2 -->
  <?php get_template_part('template-parts/services/development-support'); ?>

  <!-- blog 3 -->
  <?php get_template_part('template-parts/services/example-support'); ?>

  <!-- blogs 4 -->
  <?php
  // get_template_part('template-parts/services/services-provided'); 
  get_template_part('template-parts/services/project-carousel');
  ?>

  <!-- blogs 5 -->
  <?php get_template_part('template-parts/services/service-flow'); ?>

  <!-- blogs 6 -->
  <?php get_template_part('template-parts/services/service-contract'); ?>

  <!-- </div> -->
</section>