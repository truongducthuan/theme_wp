<?php 
/*
Template Name: News
*/
get_header();

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$posts = new WP_Query( $args );
$categories = get_the_category();
?>
<section>
  <div class="relative">
    <div class="flex absolute left-0 top-0 flex-col mt-[60px] mb-[80px] w-[36%] max-md:ml-0 max-md:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto pt-60 z-10 relative">
    <div
      class="flex gap-3 items-center self-start text-base"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
      ></div>
      <div class="self-stretch my-auto">お知らせ</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-6xl text-white">NEWS</div>
      </div>
      <div
        class="flex gap-5 justify-between self-end py-3.5 pr-3.5 pl-10 mt-20 max-w-full text-base text-black bg-white border border-black border-solid rounded-[100px] w-[295px] max-md:pl-5 hover:cursor-pointer max-md:mt-10 btn-arrow"
        >
          <div class="my-auto uppercase">すべて</div>
          <div
          class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
          >
            <img class="rotate-90" src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
          </div>
      </div>
    </div>
    <div class="flex justify-end items-end gap-4 my-10 w-full text-white"><span>Top  実績 </span><p>ニュースタイトルが入ります。ニュースタイトルが入ります。</p></div>

  </div>
</section>
<?php 
get_footer();
?>