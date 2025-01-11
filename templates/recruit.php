<?php 
/*
Template Name: Recruitment
*/
get_header();
?>

<style>
	.recruitment-js__bottom {
		bottom: -11rem;
	}
	.recruitment-mark__bg--10 {
		bottom: 10rem;
	}

  @media (max-width: 768px) {
    .recruitment-js__bottom {
      bottom: -6rem;
    }
  }
</style>

<section>
  <div class="relative">
    <div class="flex absolute -left-1 top-0 flex-col mt-[80px] mb-[80px] w-[46%] max-md:ml-0 max-md:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
    />
  </div>
  <div class="max-w-[1200px] mx-auto px-5 md:px-0 pt-32 md:pt-60 z-10 relative text-[#B2B2B2]">
    <div
      class="flex gap-3 items-center self-start text-base text-white mb-10"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full" 
      ></div>
      <div class="self-stretch my-auto">採用情報</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-6xl md:text-8xl text-white uppercase">RECRUIT</div>
      </div>
    </div>
    <div class="text-white mt-8 text-xl md:text-3xl leading-6 md:leading-10">
    キャッチコピーが入ります。<br >
    キャッチコピーが入ります。
    </div>
    <div class="mt-8">
    当社は学生・新卒・中途問わず、一緒に働いてくれる方を募集しています。 <br> 
    ITベンチャー企業での業務に挑戦したい方、いつでもご連絡ください。
    </div>
    <div class="flex justify-end items-end gap-4 mt-12 md:mt-20 mb-10 w-full text-white"><span>Top -</span><p>採用情報 </p></div>
  </div>

  <div class="relative w-full z-10 text-[#B2B2B2]">
    <div class="relative">
          
      <div class="">
        <div class="relative">
          <div class="max-w-[1200px] mx-auto px-5 md:px-0 w-full h-full flex justify-center items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/image-recruit.png" alt="image" class="w-full rounded" >
          </div>
			    <div class="absolute recruitment-js__bottom left-0 w-full mix-blend-exclusion">
            <h1 class="gradient-text">JOIN US</h1>
          </div>
        </div>
      </div>

      <div class="relative my-20 md:my-36">
        <div class="absolute -left-1 -bottom-[140px] w-[50%]">
            <img src="<?php echo get_template_directory_uri() ?>/assets/svg/recruitment/Mask-black.svg" alt="join us" class="w-full" >
          </div>
          <div class="absolute -right-1 w-[40%] recruitment-mark__bg--10">
            <img src="<?php echo get_template_directory_uri() ?>/assets/svg/recruitment/Mask-white.svg" alt="join us" class="w-full" >
          </div>
        <?php 
        $table = get_field('table');
     
        ?>
        <div class="max-w-[1200px] mx-auto text-[#B2B2B2] px-5 md:px-0 relative z-10">
          <h2 class="text-white text-xl">募集要項</h2>
          <div class="flex flex-col w-full md:w-4/6 mx-auto mt-10 divide-y-2 divide-[#B2B2B2]">
          <?php if($table): 
            $index = 0;
            $count = count($table);
            foreach($table as $item):
              if (strpos($item['value'], '/n') !== false) {
                $item['value'] = str_replace('/n', '<br>', $item['value']);
              }
          ?>
            <div class="flex justify-start items-center gap-10 py-5 <?php echo $index == $count - 1 ? 'divide-bottom' : ''; ?>">
              <div class="text-white ml-5 md:ml-16 min-w-16 md:min-w-[200px]"><?php echo $item['label']; ?></div>
              <div class="text-[#B2B2B2] mr-5 md:mr-16 leading-10"><?php echo $item['value']; ?></div>
            </div>
          <?php $index++; endforeach; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php get_footer(); ?>