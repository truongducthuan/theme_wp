<style>
  .icon-bounce {
    animation: iconBounce 2s ease-in-out infinite;
  }

  @keyframes iconBounce {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-5px);
    }
  }
</style>

<section class="grid grid-cols-1 mt-5 p-5 bg-fourth lg:mt-16 lg:py-16 lg:grid-cols-2 lg:px-20 ">
  <!-- left -->
  <div class="col-span-1 lg:col-span-1">
    <div class="w-full flex flex-col items-center justify-center pb-10 lg:items-start">
      <div class="w-[180px] h-12 flex flex-row justify-between items-center gap-1 mb-1">
        <div class="w-6">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
        </div>
        <h3 class="flex-1 text-center text-lg text-secondary font-bold">提供サービス</h3>
        <div class="w-6">
          <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
        </div>
      </div>
      <p class=" text-black font-normal">DXを通じて観光産業を盛り上げるパートナーを募集しています。お気軽にお問い合わせください。</p>
    </div>
    <div class="flex flex-col gap-4">
      <div class="w-full py-2 flex gap-5">
        <div class="w-12 h-12 icon-bounce flex items-center justify-center bg-secondary rounded-[10px] lg:w-16 lg:h-16">
          <img class="w-6 h-auto lg:w-8" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/phone-white.svg'; ?>" />
        </div>
        <span class="text-slate-700 h-full flex-1 flex justify-center flex-col">
          <p class="font-bold">Call Us Any Time</p>
          <p class="text-sm lg:text-2xl font-bold">+(009) 1888 000 2222</p>
        </span>
      </div>
      <div class="w-full py-2 flex gap-5">
        <div style="animation-delay: 0.5s" class="w-12 h-12 icon-bounce flex items-center justify-center bg-secondary rounded-[10px] lg:w-16 lg:h-16">
          <img class="w-6 h-auto lg:w-8" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/mail-white.svg'; ?>" />
        </div>
        <span class="text-slate-700 h-full flex-1 flex justify-center flex-col">
          <p class="font-bold">Email Address</p>
          <p class="text-sm lg:text-2xl font-bold">info@techin.com</p>
        </span>
      </div>
      <div class="w-full py-2 flex gap-5">
        <div style="animation-delay: 1s" class="w-12 h-12 icon-bounce flex items-center justify-center bg-secondary rounded-[10px] lg:w-16 lg:h-16">
          <img class="w-6 h-auto lg:w-8" alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/map-white.svg'; ?>" />
        </div>
        <span class="h-full text-slate-700 flex-1 flex justify-center flex-col">
          <p class="font-bold">Office Address</p>
          <p class="text-sm lg:text-2xl font-bold">12th Street, New York, USA</p>
        </span>
      </div>
    </div>
  </div>

  <!-- right -->
  <div class="col-span-1 flex flex-1 items-center mt-5 lg:col-span-1 lg:px-3 lg:pb-16 ">
    <img
      src="<?php echo get_template_directory_uri() . '/assets/imgs/services/contract-hand.jpg'; ?>"
      alt="Icon"
      class="w-full h-auto object-cover rounded-[30px]" />
  </div>

</section>