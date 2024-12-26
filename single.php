<?php 
get_header();

$categories = get_the_category();
$url = get_field('blog_image', $post->ID);
// foreach ($categories as $term) {
//   echo '<div class="text-white">';
//   print_r($post);
//   echo '</div>';
// };

$author_id = $post->post_author; // Get author ID
$author_name = get_the_author_meta('display_name', $author_id);
?>

<style>
  .news_post .wp-block-heading {
    margin: 40px 0;
  }
  .news_post .wp-block-heading {}
</style>

<div class="relative">
  <div class="flex absolute left-0 top-0 flex-col mt-[60px] mb-[80px] w-[36%] max-md:ml-0 max-md:w-full">
  <img
    loading="lazy"
    src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
    class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
  />
</div>
</div>
<section class="relative z-10 pb-28 pt-60 max-w-[1200px] mx-auto flex flex-col items-center justify-center rounded-lg news_post">
  <div class="flex flex-col items-start justify-start self-start gap-8 text-white py-1 rounded-xl">
    <div class=""><?php echo $categories[0]->name; ?></div>
    <div><a class="font-bold text-6xl" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></div>
    <div class="flex items-center gap-6">
      <div><?php echo get_the_date('d/m/y'); ?></div>
      <div><?php echo $author_name; ?></div>
    </div>
  </div>

  <div class="flex justify-end items-end gap-4 my-10 w-full text-white"><span>Top  実績 </span><p>ニュースタイトルが入ります。ニュースタイトルが入ります。</p></div>

  <div class="bg-[#353333] p-5 md:p-16 text-white rounded-xl mt-16 mb-2 md:mb-8 w-full">
      <?php echo apply_filters('the_content', $post->post_content); ?>
    </div>
    <div class="w-full h-[1px] bg-[#D9D9D9] my-16"></div>
    <div class="flex text-white items-center justify-between w-full gap-4">
      <div class="flex items-center gap-4">
        <div
          class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
        >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
        </div>
        <p>タイトルが入ります。タイトルが入ります。</p>
      </div>
      <div class="bg-white rounded-full py-[14px] px-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/svg/menu.svg ?>" ></div>
      <div class="flex items-center gap-4">
        <p>タイトルが入ります。タイトルが入ります。</p>
        <div
          class="flex shrink-0 bg-blue-900 rounded-full h-[35px] w-[35px] p-2"
        >
          <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow-white.svg" alt="arrow" srcset="">
        </div>
      </div>
    </div>
  </div>
</section>
<div class="mb-16 w-full">
  <?php include(locate_template('template-parts/recruit-contact.php')); ?>
</div>

<?php
get_footer();
?>