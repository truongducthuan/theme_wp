<style>
  .provided__background_1 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_1.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_2 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_2.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_center {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_center.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_3 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_3.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .provided__background_4 {
    position: relative;
    background-image: url('<?php echo get_template_directory_uri() . '/assets/imgs/services/provided_4.jpg'; ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
</style>

<section class="mt-16 py-16 px-20 bg-[#F5F4FF]">
  <div class="w-full flex flex-col items-center justify-center pb-16">
    <div class="w-[850px] h-12 flex flex-row justify-between items-center gap-2.5 mb-7">
      <div class="w-6">
        <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
      </div>
      <h1 class="flex-1 text-center text-xl text-[#2F2BEB] font-bold">提供サービス</h1>
      <div class="w-6">
        <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
      </div>
    </div>
    <h3 class="text-center text-xl text-black font-bold">テクノロジーと人材の力で、観光DXを加速させるサービスをご提供します。</h3>
  </div>

  <div class="w-full grid grid-cols-3 gap-1 px-3 pb-16">
    <div class="min-h-36 flex flex-col gap-y-10 px-3">
      <div class="w-80 h-80 rounded-[20px] relative provided__background_1 mb-16">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
      <div class="w-80 h-80 rounded-[20px] relative provided__background_2">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
    </div>
    <div class="h-full w-full flex items-center">
      <div class="w-full h-[400px] rounded-[20px] relative provided__background_center mb-16">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
    </div>
    <div class="min-h-36 flex flex-col gap-y-10 px-3">
      <div class="w-80 h-80 rounded-[20px] relative provided__background_3 mb-16">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
      <div class="w-80 h-80 rounded-[20px] relative provided__background_4">
        <div class="h-16 w-3/5 p-5 bg-[#2BC8EB] absolute -bottom-10 left-1/2 -translate-x-1/2 rounded-[10px] text-[#222627] text-2xl font-bold">Alex Smith</div>
      </div>
    </div>
  </div>
</section>