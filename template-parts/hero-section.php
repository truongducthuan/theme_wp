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
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Left Content -->
      <div class="hero-group_text space-y-6 ml-0 xl:ml-26 2xl:ml-34 pl-0 md:pl-5 lg:pl-10">
        <div class="inline-block">
          <span class="bg-secondary px-6 py-2 rounded text-sm font-medium">
            観光DXに特化したITソリューション
          </span>
        </div>

        <h1 class="line-height-2 text-3xl text-blue-500 md:text-4xl lg:text-5xl font-bold whitespace-nowrap">
          観光産業の収益 <br /> 生産性向上を<br />デジタルの力で実現！
        </h1>

        <p class="text-slate-700 text-lg leading-relaxed max-w-xl">
          私たちは観光業界のニーズに合わせた、革新的で<br />信頼性の高いソフトウェアを提供します。<br />テクノロジーの力で、あなたのビジネスを次のステージへ。
        </p>

        <!--         <button data-text="Get Start Now" class="techin-btn relative bg-secondary px-8 py-4 rounded font-semibold text-lg transition-all duration-300 transform">
          <span>Get Start Now</span>
        </button> -->
      </div>

      <!-- Right Content - Hero Image -->
      <div class="relative">
        <!-- Purple Geometric Shape -->
        <!-- <div class="absolute inset-0 from-secondary to-purple-600 rounded-full transform rotate-12 scale-110 opacity-80 blur-3xl"></div> -->

        <!-- Businessman Image Placeholder -->
        <div class="hero-image -mb-3">
          <img
            src="<?php echo get_template_directory_uri() . '/assets/imgs/home/team-synora.png' ?>"
            alt="Professional Businessman"
            class="z-10 w-full h-auto rounded-lg" />
        </div>

        <!-- Decorative Elements -->
        <!-- <div class="absolute top-10 right-10 w-20 h-20 border-4 border-blue-400 rounded-full opacity-50 float-animation"></div> -->
        <!-- <div class="absolute bottom-10 left-10 w-16 h-16 border-4 border-purple-400 rounded-full opacity-50 float-animation" style="animation-delay: 1s;"></div> -->
      </div>
    </div>
  </div>
</section>