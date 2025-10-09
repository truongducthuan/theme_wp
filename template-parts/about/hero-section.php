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

<<<<<<< HEAD
  <section class="relative z-10 mt-0 lg:mt-0 px-5 lg:px-20 pt-28 pb-8 lg:pt-44 lg:pb-20" id="home-hero">
  <!-- Network Animation Canvas -->
  =======
  <section class="hero-section-bg pt-16 lg:pt-28">
    >>>>>>> 350a4ec415bb574fe54d7e045bee0bb0c6352b24
    <canvas id="networkCanvas" class="network-canvas"></canvas>

    <!-- Bg logo -->
    <div class="mx-auto">
      <div class="items-center">
        <div class="herro-text relative z-20 hero-group_text space-y-6 ml-0 xl:ml-26 2xl:ml-34 pl-0 md:pl-5 lg:pl-10">
          <div class="inline-block">
            <span class="bg-secondary px-6 py-2 rounded text-sm font-medium">
              企業情報
            </span>
          </div>

          <h1 class="text-secondary line-height-2 text-4xl text-blue-500 md:text-6xl lg:text-7xl font-bold whitespace-nowrap">
            観光産業の収益生産性向上を<br />デジタルの力で実現！
            <!-- Hero Section -->
            <section class="relative z-10 flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-32">
              <!-- Hero Image Container -->
              <div class="hero-image-container w-full flex flex-col items-end justify-end">
                <div class="w-full text-center">
                  <h1 class="text-third line-height-2 text-3xl md:text-5xl lg:text-6xl font-bold">
                    観光産業の収益生産性向上を <br /> デジタルの力で実現！
                  </h1>

                         <p class="text-slate-700 text-lg leading-relaxed w-full">
                    日本の観光業をテクノロジーで次の時代へ。デジタルだけでなく、人と資産の力も合わ
                  </p>

                  <!--         <button data-text="Get Start Now" class="techin-btn relative bg-secondary px-8 py-4 rounded font-semibold text-lg transition-all duration-300 transform">
          <span>Get Start Now</span>
        </button> -->
                </div>

              </div>
        </div>
  </section>