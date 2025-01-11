<div class="w-full h-full flex items-center justify-center gap-[1px] bg-white">
  <div class="text-white w-1/2 flex justify-between items-center gap-5 md:gap-10 bg-black p-5 md:p-[100px]">
    <div>
      <h2 class="text-xl md:text-6xl mb-0 md:mb-4">Recruit</h2>
      <p class="text-sm">採用情報</p>
    </div>
    <a  href="<?php echo esc_url(home_url('/recruitment')); ?>" class="flex justify-center items-center gap-4 w-10 md:w-16 h-10 md:h-16 rounded-full border border-white">
      <img src="<?php echo get_template_directory_uri() . '/assets/svg/arrow-white.svg'; ?>" >
    </a>
  </div>
  <div class="text-white w-1/2 flex justify-between items-center gap-5 md:gap-10 bg-black p-5 md:p-[100px]">
    <div>
      <h2 class="text-xl md:text-6xl mb-0 md:mb-4">Contact</h2>
      <p class="text-sm">お問い合わせ</p>
    </div>
    <a  href="<?php echo esc_url(home_url('/contact-form')); ?>" class="flex justify-center items-center gap-4 w-10 md:w-16 h-10 md:h-16 rounded-full border border-white">
      <img src="<?php echo get_template_directory_uri() . '/assets/svg/arrow-white.svg'; ?>" >
    </a>
  </div>
</div>