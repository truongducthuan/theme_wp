<?php
get_header();

$categories = get_the_category();
$url = get_field('blog_image', $post->ID);
// foreach ($categories as $term) {
  // echo '<pre>';
  // print_r($categories[0]->category_description);
  // echo '</pre>';
//     if ($term->term_id == 35) {
//         $term_exits = true;
//     }
// };

?>

<section class="mt-[120px] max-w-[1200px] mx-auto bg-[#e1ebf4] flex flex-col p-16 items-center justify-center rounded-lg">
  <h1 class="capitalize text-primary text-3xl font-bold">News</h1>
  <p class="font-semibold mb-8">tin tức</p>
  <div class="flex items-center justify-center gap-4 bg-white px-8 py-1 rounded-xl">
    <a href="<?php echo esc_url(home_url()); ?>"><i class="fa-solid fa-house-chimney text-primary hover:text-secondary transition"></i></a>
    <div class="border-r-[1px] border-solid border-primary h-4"></div>
    <span class="text-secondary text-sm text-[#797979] font-bold">Tin tức</span>
  </div>

  <div class="border border-dotted border-blue-500/100 p-12 bg-white rounded-xl mt-16 mb-8 w-3/4">
    <div class="flex justify-between items-center">
      <div class="font-bold"><?php echo get_the_date('d/m/y'); ?></div>
      <div class="<?php echo ($categories[0]->category_description == 1) ? 'bg-[#ccfff5]' : 'bg-[#eeff9b]'; ?> px-4 rounded-3xl">
        <?php echo $categories[0]->name; ?>
      </div>
    </div>
    <h2 class="font-bold text-xl my-4"><?php the_title(); ?></h2>
    <div class="border-t border-dotted border-blue-500/100 w-full mb-4"></div>
      <?php echo '<img class="mb-7" src="'. $url .'" >' ?>
    <div>
      <?php echo apply_filters('the_content', $post->post_content); ?>
    </div>
  </div>
  <div class="mb-16 w-3/4">
    <?php include(locate_template('template-parts/banner-btn.php')); ?>
  </div>
</section>

<?php
// echo print_r($post);
get_footer();
?>