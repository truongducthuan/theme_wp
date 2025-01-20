<?php
/**
* Template Name: PRIVACY POLICY
*/

get_header(); 
?>

<style>
  .wp-block-heading {
    font-size: 30px;
    font-weight: 700;
    margin: 40px 0;
  }
</style>

<section>
<div class="relative">
    <div class="flex absolute left-0 top-0 flex-col mt-[100px] mb-[80px] w-[50%] max-lg:ml-0 max-lg:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-lg:mt-10 max-lg:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto pt-32 lg:pt-60 px-5 lg:px-0 z-10 relative">
    <div
      class="flex gap-3 items-center self-start text-base text-white mb-10"
    >
      <div
        class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 bg-red-600 rounded-full"
      ></div>
      <div class="self-stretch my-auto">お知らせ→プライバシーポリシー</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
        <div class="font-bold text-4xl lg:text-8xl text-white uppercase"><?php the_title(); ?></div>
      </div>
    </div>
    <div class="text-white mt-10">
    すべてボタン→なし
    </div>
    <div class="flex justify-end items-end gap-4 mt-16 lg:mt-20 mb-10 w-full text-white"><span>Top ー</span><p>お知らせ</p><span>Top ー</span><p>プライバシーポリシー</p>
    </div>

  </div>

 <div class="max-w-[1200px] mx-auto pb-32 lg:b-60 pt-16 lg:pt-32 px-5 lg:px-0 z-10 relative text-white">
  <?php the_content(); ?>
 </div>
</section>

<?php get_footer(); ?>