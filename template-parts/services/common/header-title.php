<section class="w-full flex flex-col items-center justify-center mt-8 mb-6 lg:mt-28 lg:pb-16">
  <div class="h-12 flex flex-row justify-between items-center gap-1 mb-2 lg:gap-2.5 lg:mb-7">
    <div class="w-6">
      <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
    </div>
    <h1 class="flex-1 text-center text-lg lg:text-[40px] text-[#2F2BEB] font-bold"><?php echo esc_html($args['title']); ?></h1>
    <div class="w-6">
      <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
    </div>
  </div>
  <h3 class="text-center text-sm lg:text-xl text-black font-bold"><?php echo esc_html($args['sub-title']); ?></h3>
</section>