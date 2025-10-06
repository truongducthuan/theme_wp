<style>
  .news-hero__background {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/bg-support.png'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    overflow: hidden;
  }

  .news-hero__background::before {
    content: "";
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(2px);
    z-index: 1;
  }

  .news-hero__background>* {
    position: relative;
    z-index: 2;
  }

</style>

<section class="news-hero__background pb-10 md:pb-20">
  <?php get_template_part('template-parts/services/common/header-title', null, ['title' => '貴社に最適化された柔軟な「開発支援」', 'sub-title' => 'コンセプト策定からフルスクラッチ開発、グロース支援まで、貴社のビジネスに最適な観光DXをワンストップでご提供。']); ?>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
    <!-- Card 1 -->
    <div class="h-[300px] md:h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
      <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center md:pb-28 ">
        <div class="w-16 h-16 mb-6 flex items-center justify-center bg-[#2F2BEB] rounded-[10px]">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-setting-pc.svg'; ?>" />
        </div>
        <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
        <button
          class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
          もっと詳しく
        </button>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="h-[300px] md:h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
      <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center md:pb-28 ">
        <div class="w-16 h-16 mb-6 flex items-center justify-center bg-[#2F2BEB] rounded-[10px]">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'; ?>" />
        </div>
        <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
        <button
          class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
          もっと詳しく
        </button>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="h-[300px] md:h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
      <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center md:pb-28 ">
        <div class="w-16 h-16 mb-6 flex items-center justify-center bg-[#2F2BEB] rounded-[10px]">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/cloud-icon-white.svg'; ?>" />
        </div>
        <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
        <button
          class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
          もっと詳しく
        </button>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="h-[300px] md:h-[450px] bg-[#2BC8EB] rounded-tr-[100px] shadow-md hover:shadow-xl transition-shadow duration-300">
      <div class="w-full h-full bg-white rounded-tr-[150px] p-8 flex flex-col items-center text-center md:pb-28 ">
        <div class="w-16 h-16 mb-6 flex items-center justify-center bg-[#2F2BEB] rounded-[10px]">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/icon-protect-pc.svg'; ?>" />
        </div>
        <h3 class="text-lg font-bold mb-4 text-[#222627]">ラボ型開発支援（チーム拡張）</h3>
        <button
          class="mt-auto bg-[#2F2BEB] text-white text-sm font-semibold px-6 py-2 rounded-full hover:bg-[#1c1bbd] transition-colors duration-300">
          もっと詳しく
        </button>
      </div>
    </div>
  </div>
</section>