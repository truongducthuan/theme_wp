<?php 
  get_header();

  $post_id = $post->ID;

  $get_bg = get_field('background', $post_id);
  $get_photo_left = get_field('left', $post_id);
  $get_photo_right = get_field('right', $post_id);
  $get_title_service = get_field('title', $post_id);
  $get_desc_service = get_field('description', $post_id);
  $get_table = get_field('table', $post_id);
  $get_content = get_field('content', $post_id);
  $get_detail_imag = get_field('image_detail', $post_id);
  
  $post_type = get_post_type($post_id);
  $taxonomies = get_object_taxonomies($post_type, 'names');
  
  $terms_list = [];
  
  foreach ($taxonomies as $taxonomy) {
      $terms = get_the_terms($post_id, $taxonomy);
      
      if ($terms && !is_wp_error($terms)) {
          $terms_list[$taxonomy] = $terms;
      }
  }
  if (!empty($terms_list)) {
      foreach ($terms_list as $taxonomy => $terms) {
          $post->taxonomy = $terms;
      }
  }
//   print_r($post->taxonomy[0]->name);
?>

<section>
<div class="relative text-[#B2B2B2]">
    <div class="flex absolute left-0 top-0 flex-col mt-[80px] mb-[80px] w-[50%] max-md:ml-0 max-md:w-full">
    <img
      loading="lazy"
      src="<?php echo get_template_directory_uri() ?>/assets/svg/banner-left.svg"
      class="object-contain self-stretch my-auto mr-0 w-full aspect-[1.03] max-md:mt-10 max-md:max-w-full"
    />
  </div>

  <div class="max-w-[1200px] mx-auto px-5 md:px-0 pt-32 md:pt-60 z-10 relative">
    <div
      class="flex gap-3 items-center self-start text-base mb-5 md:mb-10"
    >
      <div class="self-stretch my-auto">実績紹介</div>
    </div>
    <div class="flex justify-between gap-4">
      <div class="flex flex-col items-start justify-start self-start gap-8 py-1 rounded-xl">
        <div class="font-bold text-3xl md:text-6xl uppercase"><?php the_title(); ?></div>
      </div>
    </div>
    <div class="mt-5 md:mt-10 flex items-center gap-4">
        <p>to-suto</p>
		<?php 
		foreach($post->taxonomy as $item) {
			echo '<p>#'. $item->name .'</p>';
		}
		?>
    </div>
    <div class="flex justify-end items-end gap-4  mt-10 md:mt-40 mb-10 md:mb-20 w-full"><span>Top -</span><p><?php the_title(); ?></p></div>
  </div>

  <div class="relative z-10 max-w-[1200px] px-5 md:px-0 mx-auto">
    <div class="relative flex w-full h-[400px] md:h-[650px] items-center justify-center gap-5 rounded">
        <div class="absolute inset-0 w-full">
            <img src="<?php echo $get_bg; ?>" alt="background" class="w-full rounded" style="height: -webkit-fill-available;" >
        </div>
        <div class="w-1/2 z-10">
            <img src="<?php echo $get_photo_left ?>" alt="image left" class="max-w-full" >
        </div>
        <?php 
        if(!empty($get_photo_right)) {
            echo '
        <div class="w-1/2 z-10">
            <img src="'. $get_photo_right .'" alt="image right" class="max-w-full" >
        </div>
            ';
        }
        ?>
        
    </div>

    <div class="flex justify-between items-start gap-5 my-10 md:my-20">
        <div class="min-w-[30%] text-xl md:text-3xl text-white"><?php echo $get_title_service; ?></div>
        <div><?php echo $get_desc_service; ?></div>
    </div>

    <ul>
    <?php 
    if(is_array($get_table)):
        foreach ($get_table as $table):
    ?>
        <li class="flex items-center justify-start gap-5">
            <div class="min-w-[200px]"><span class="bg-red-500 w-3 h-3 inline-block mr-1 uppercase rounded-full"></span> <?php echo $table['label']; ?></div>
            <div class="w-full self-start"><?php echo $table['value']; ?></div>
        </li>
    <?php endforeach; endif; ?>
    </ul>

    <div class="flex flex-col items-start justify-start self-start gap-8 py-20">
        <?php 
        if(is_array($get_content)):
            foreach ($get_content as $content):
        ?>
            <div>
                <h3 class="font-bold text-2xl text-white mb-5"><?php echo $content['title']; ?></h3>
                <p class=""><?php echo $content['description']; ?></p>
            </div>
        <?php endforeach; endif; ?>
    </div>

    <?php if(!empty($get_detail_imag)): ?>
        <div><img src="<?php echo $get_detail_imag; ?>" class="w-full" ></div>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
?>