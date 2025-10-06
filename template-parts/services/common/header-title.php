<section class="w-full flex flex-col items-center justify-center mt-28 pb-16">
  <div class="w-[850px] h-12 flex flex-row justify-between items-center gap-2.5 mb-7">
    <div class="w-6">
      <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
    </div>
    <h1 class="flex-1 text-center text-[40px] text-[#2F2BEB] font-bold"><?php echo esc_html($args['title']); ?></h1>
    <div class="w-6">
      <img alt="icon" src="<?php echo get_template_directory_uri() . '/assets/imgs/svgs/service-icon-header.svg'; ?>" />
    </div>
  </div>
  <h3 class="text-center text-xl text-black font-bold"><?php echo esc_html($args['sub-title']); ?></h3>
</section>